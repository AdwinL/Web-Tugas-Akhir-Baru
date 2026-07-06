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
        return view('home', [
            'announcements' => Announcement::active()->get(),
            'menuCategories' => Category::where('type', 'menu')->with('menus')->get(),
            'featuredEvents' => Event::where('is_active', true)->where('is_featured', true)->take(4)->get(),
            'promos' => Promo::active()->take(3)->get(),
            'testimonials' => $this->fetchGoogleTestimonials(),
            'blogPosts' => Post::active()->latest('published_at')->take(3)->get(),
            'partners' => Partner::where('is_active', true)->get(),
            'contact' => Contact::first(),
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

        if (!$apiKey || !$placeId) {
            return [
                ['name' => 'Dina Pratama', 'comment' => 'Surya Lagoon membuat acara keluarga kami sangat mengesankan!', 'rating' => 5, 'photo' => null, 'relative_time' => '2 weeks ago'],
                ['name' => 'Rina Sari', 'comment' => 'Pelayanan profesional dan suasana restoran sangat nyaman.', 'rating' => 5, 'photo' => null, 'relative_time' => '1 month ago'],
                ['name' => 'Budi Santoso', 'comment' => 'Makanan lezat, musik live seru, dan reservasi mudah.', 'rating' => 5, 'photo' => null, 'relative_time' => '3 months ago'],
            ];
        }

        $cacheKey = "google_reviews_{$placeId}";

        return Cache::remember($cacheKey, 3600, function () use ($apiKey, $placeId) {
            try {
                $response = Http::timeout(5)->get('https://maps.googleapis.com/maps/api/place/details/json', [
                    'place_id' => $placeId,
                    'fields' => 'reviews',
                    'key' => $apiKey,
                    'language' => 'en'
                ]);

                if (!$response->ok()) {
                    Log::warning('Google Places API request failed', ['status' => $response->status(), 'body' => $response->body()]);
                    return [
                        ['name' => 'Dina Pratama', 'comment' => 'Surya Lagoon membuat acara keluarga kami sangat mengesankan!', 'rating' => 5, 'photo' => null, 'relative_time' => '2 weeks ago'],
                        ['name' => 'Rina Sari', 'comment' => 'Pelayanan profesional dan suasana restoran sangat nyaman.', 'rating' => 5, 'photo' => null, 'relative_time' => '1 month ago'],
                        ['name' => 'Budi Santoso', 'comment' => 'Makanan lezat, musik live seru, dan reservasi mudah.', 'rating' => 5, 'photo' => null, 'relative_time' => '3 months ago'],
                    ];
                }

                $reviews = $response->json('result.reviews', []);

                if (!is_array($reviews) || empty($reviews)) {
                    return [
                        ['name' => 'Dina Pratama', 'comment' => 'Surya Lagoon membuat acara keluarga kami sangat mengesankan!', 'rating' => 5, 'photo' => null, 'relative_time' => '2 weeks ago'],
                        ['name' => 'Rina Sari', 'comment' => 'Pelayanan profesional dan suasana restoran sangat nyaman.', 'rating' => 5, 'photo' => null, 'relative_time' => '1 month ago'],
                        ['name' => 'Budi Santoso', 'comment' => 'Makanan lezat, musik live seru, dan reservasi mudah.', 'rating' => 5, 'photo' => null, 'relative_time' => '3 months ago'],
                    ];
                }

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
