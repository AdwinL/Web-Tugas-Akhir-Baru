<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Promo;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin Surya',
            'email' => 'admin@suryalagoon.test',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        Category::insert([
            ['name' => 'Appetizers', 'slug' => 'appetizers', 'type' => 'menu', 'description' => 'Small plates to begin your meal.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Main Course', 'slug' => 'main-course', 'type' => 'menu', 'description' => 'Hearty entrees from land and sea.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Drinks', 'slug' => 'drinks', 'type' => 'menu', 'description' => 'Signature cocktails and refreshing beverages.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Wedding', 'slug' => 'wedding', 'type' => 'event', 'description' => 'Complete wedding packages for your special day.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Birthday', 'slug' => 'birthday', 'type' => 'event', 'description' => 'Fun birthday event packages for every guest count.', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Menu::insert([
            ['category_id' => 1, 'title' => 'Seafood Platter', 'description' => 'A curated selection of ocean-fresh seafood.', 'price' => 320000.00, 'image_path' => null, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 2, 'title' => 'Grilled Beef Sirloin', 'description' => 'Premium cut served with seasonal sides.', 'price' => 215000.00, 'image_path' => null, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 3, 'title' => 'Signature Sunset Cocktail', 'description' => 'A refreshing blend of tropical juices.', 'price' => 85000.00, 'image_path' => null, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Event::insert([
            ['category_id' => 4, 'title' => 'Wedding Celebration', 'slug' => 'wedding-celebration', 'description' => 'Elegant wedding planning with custom menu and decor.', 'price_range' => 'Rp 15.000.000 - Rp 35.000.000', 'event_type' => 'Wedding', 'image_path' => null, 'is_featured' => true, 'is_active' => true, 'starts_at' => now()->addDays(10), 'ends_at' => now()->addDays(10)->addHours(6), 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'title' => 'Birthday Gala', 'slug' => 'birthday-gala', 'description' => 'Memorable birthday party package with entertainment.', 'price_range' => 'Rp 8.000.000 - Rp 20.000.000', 'event_type' => 'Birthday', 'image_path' => null, 'is_featured' => true, 'is_active' => true, 'starts_at' => now()->addDays(7), 'ends_at' => now()->addDays(7)->addHours(5), 'created_at' => now(), 'updated_at' => now()],
        ]);

        Promo::insert([
            ['title' => 'Weekend Feast', 'slug' => 'weekend-feast', 'description' => '10% off event bookings on weekends.', 'code' => 'WEEKEND10', 'discount_percent' => 10, 'starts_at' => now()->subDays(5), 'ends_at' => now()->addWeeks(4), 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Post::insert([
            ['title' => 'New Seasonal Menu', 'slug' => 'new-seasonal-menu', 'excerpt' => 'Discover our newest seasonal menu featuring ocean-fresh ingredients.', 'content' => 'Surya Lagoon introduces a limited-time seasonal menu designed for special celebrations.', 'image_path' => null, 'author' => 'Admin', 'published_at' => now()->subDays(2), 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Announcement::insert([
            ['title' => 'Private event bookings available', 'content' => 'Ask about our private event spaces and custom catering packages.', 'link' => '/contact', 'starts_at' => now()->subDays(1), 'ends_at' => now()->addWeeks(2), 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Gallery::insert([
            ['caption' => 'Lakeside evening seating', 'image_path' => null, 'category' => 'Event', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Faq::insert([
            ['question' => 'How far in advance should I book?', 'answer' => 'For weekend events, we recommend booking at least 2 weeks ahead.', 'order' => 1, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['question' => 'Can I request a custom menu?', 'answer' => 'Yes, our team can tailor a menu to your preferences and dietary needs.', 'order' => 2, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Partner::insert([
            ['name' => 'Sunset Events', 'website' => 'https://sunset-events.example', 'logo_path' => null, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Contact::create([
            'address' => 'Jl. Surya Lagoon No. 12, Bali',
            'phone' => '+62 812 3456 7890',
            'email' => 'info@suryalagoon.example',
            'map_url' => 'https://www.google.com/maps?q=Jl.+Surya+Lagoon+No.+12,+Bali&output=embed',
            'instagram' => '@surya_lagoon',
            'facebook' => 'SuryaLagoon',
            'whatsapp' => '+6281234567890',
            'opening_hours' => 'Daily 10:00 - 22:00',
        ]);

        Reservation::create([
            'name' => 'Ayu Santoso',
            'phone' => '+62 812 9876 5432',
            'email' => 'ayu@example.com',
            'guest_count' => 30,
            'date' => now()->addDays(12)->toDateString(),
            'time' => '18:00:00',
            'event_type' => 'Wedding',
            'notes' => 'Please prepare a vegan option.',
            'status' => 'pending',
            'whatsapp_opt_in' => true,
            'event_size' => 'Large',
        ]);
    }
}
