<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Promo;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'menuCount' => Menu::count(),
            'eventCount' => Event::count(),
            'promoCount' => Promo::count(),
            'postCount' => Post::count(),
            'reservationCount' => Reservation::count(),
            'pendingReservations' => Reservation::where('status', 'pending')->count(),
            'activeAnnouncements' => Announcement::active()->count(),
            'contacts' => Contact::count(),
            'galleryCount' => Gallery::count(),
            'faqCount' => Faq::count(),
            'partnerCount' => Partner::count(),
        ]);
    }
}
