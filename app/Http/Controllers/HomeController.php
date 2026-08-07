<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        // Menyiapkan data untuk halaman depan (home)
        // Penjelasan: tiap elemen di bawah ini akan tersedia pada view `home` sebagai variabel.
        return view('home', [
            // pengumuman aktif
            'announcements' => Announcement::active()->get(),
            // kategori menu beserta relasi menu
            'menuCategories' => Category::where('type', 'menu')->with('menus')->get(),
            // event yang aktif dan ditandai featured (maks 4)
            'featuredEvents' => Event::where('is_active', true)->where('is_featured', true)->take(4)->get(),
            // promo aktif (maks 3)
            'promos' => Promo::active()->take(3)->get(),
            // testimonial diambil dari Google Places atau fallback statis
            'testimonials' => $this->fetchGoogleTestimonials(),
            // artikel/blog terbaru
            'blogPosts' => Post::active()->latest('published_at')->take(3)->get(),
            // daftar partner aktif
            'partners' => Partner::where('is_active', true)->get(),
            // kontak bisnis (ambil record pertama)
            'contact' => Contact::first(),
            // FAQ singkat
            'faqItems' => Faq::active()->take(5)->get(),
        ]);
    }

    public function about()
    {
        return view('about', [
            'team' => [
                ['name' => 'Chef Arya', 'role' => 'Head Chef'],
                ['name' => 'Maya', 'role' => 'Event Coordinator'],
                ['name' => 'Fajar', 'role' => 'Guest Relations'],
            ],
        ]);
    }

    protected function fetchGoogleTestimonials(): array
    {
        $apiKey = config('services.google_places.api_key');
        $placeId = config('services.google_places.place_id');

        // Jika konfigurasi API belum diisi, kembalikan daftar testimonial fallback
        if (!$apiKey || !$placeId) {
            return [
                ['name' => 'Dina Pratama', 'comment' => 'Surya Lagoon membuat acara keluarga kami sangat mengesankan!', 'rating' => 5, 'photo' => null, 'relative_time' => '2 weeks ago'],
                ['name' => 'Rina Sari', 'comment' => 'Pelayanan profesional dan suasana restoran sangat nyaman.', 'rating' => 5, 'photo' => null, 'relative_time' => '1 month ago'],
                ['name' => 'Budi Santoso', 'comment' => 'Makanan lezat, musik live seru, dan reservasi mudah.', 'rating' => 5, 'photo' => null, 'relative_time' => '3 months ago'],
            ];
        }

        $cacheKey = "google_reviews_{$placeId}";

        // Gunakan cache untuk mengurangi panggilan ke Google API (cache 1 jam)
        return Cache::remember($cacheKey, 3600, function () use ($apiKey, $placeId) {
            try {
                $response = Http::timeout(5)->get('https://maps.googleapis.com/maps/api/place/details/json', [
                    'place_id' => $placeId,
                    'fields' => 'reviews',
                    'key' => $apiKey,
                    'language' => 'en'
                ]);

                // Jika respons tidak OK, log dan kembalikan fallback
                if (!$response->ok()) {
                    Log::warning('Google Places API request failed', ['status' => $response->status(), 'body' => $response->body()]);
                    return [
                        ['name' => 'Dina Pratama', 'comment' => 'Surya Lagoon membuat acara keluarga kami sangat mengesankan!', 'rating' => 5, 'photo' => null, 'relative_time' => '2 weeks ago'],
                        ['name' => 'Rina Sari', 'comment' => 'Pelayanan profesional dan suasana restoran sangat nyaman.', 'rating' => 5, 'photo' => null, 'relative_time' => '1 month ago'],
                        ['name' => 'Budi Santoso', 'comment' => 'Makanan lezat, musik live seru, dan reservasi mudah.', 'rating' => 5, 'photo' => null, 'relative_time' => '3 months ago'],
                    ];
                }

                $reviews = $response->json('result.reviews', []);

                // Jika tidak ada review, kembalikan fallback
                if (!is_array($reviews) || empty($reviews)) {
                    return [
                        ['name' => 'Dina Pratama', 'comment' => 'Surya Lagoon membuat acara keluarga kami sangat mengesankan!', 'rating' => 5, 'photo' => null, 'relative_time' => '2 weeks ago'],
                        ['name' => 'Rina Sari', 'comment' => 'Pelayanan profesional dan suasana restoran sangat nyaman.', 'rating' => 5, 'photo' => null, 'relative_time' => '1 month ago'],
                        ['name' => 'Budi Santoso', 'comment' => 'Makanan lezat, musik live seru, dan reservasi mudah.', 'rating' => 5, 'photo' => null, 'relative_time' => '3 months ago'],
                    ];
                }

                // Ambil maksimal 3 review, ubah struktur data agar konsisten untuk view
                return collect($reviews)
                    ->take(3)
                    ->map(function ($review) {
                        return [
                            'name' => $review['author_name'] ?? 'Guest',
                            'comment' => $review['text'] ?? '',
                            'rating' => isset($review['rating']) ? (int) $review['rating'] : null,
                            'photo' => $review['profile_photo_url'] ?? null,
                            'relative_time' => $review['relative_time_description'] ?? null,
                            'author_url' => $review['author_url'] ?? null,
                        ];
                    })
                    ->toArray();
            } catch (\Exception $e) {
                // Jika terjadi error saat memanggil API, log error dan kembalikan fallback
                Log::error('Error fetching Google reviews: ' . $e->getMessage());
                return [
                    ['name' => 'Dina Pratama', 'comment' => 'Surya Lagoon membuat acara keluarga kami sangat mengesankan!', 'rating' => 5, 'photo' => null, 'relative_time' => '2 weeks ago'],
                    ['name' => 'Rina Sari', 'comment' => 'Pelayanan profesional dan suasana restoran sangat nyaman.', 'rating' => 5, 'photo' => null, 'relative_time' => '1 month ago'],
                    ['name' => 'Budi Santoso', 'comment' => 'Makanan lezat, musik live seru, dan reservasi mudah.', 'rating' => 5, 'photo' => null, 'relative_time' => '3 months ago'],
                ];
            }
        });
    }
}
