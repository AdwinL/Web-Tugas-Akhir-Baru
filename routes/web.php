<?php

use App\Http\Controllers\Admin\AnnouncementController as AdminAnnouncementController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\Admin\PartnerController as AdminPartnerController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\PromoController as AdminPromoController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CareerController;
use App\Http\Middleware\EnsureAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/{category:slug}', [MenuController::class, 'category'])->name('menu.category');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event:slug}', [EventController::class, 'show'])->name('events.show');
Route::get('/promos', [PromoController::class, 'index'])->name('promos.index');
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/career', [CareerController::class, 'index'])->name('career.index');
Route::post('/reserve', [ReservationController::class, 'store'])->name('reserve.store');

Route::middleware(['auth'])->get('/dashboard', function () {
    return auth()->user()->is_admin
        ? redirect()->route('admin.dashboard')
        : view('dashboard');
})->name('dashboard');

// (Pages feature removed)

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::middleware([EnsureAdmin::class])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('menus', AdminMenuController::class);
        Route::resource('events', AdminEventController::class);
        Route::resource('promos', AdminPromoController::class);
        Route::resource('posts', AdminPostController::class);
        Route::resource('announcements', AdminAnnouncementController::class);
        Route::resource('galleries', AdminGalleryController::class);
        Route::resource('faqs', AdminFaqController::class);
        Route::resource('contacts', AdminContactController::class)->only(['index', 'edit', 'update']);
        Route::resource('partners', AdminPartnerController::class);
        Route::resource('reservations', AdminReservationController::class)->except(['create', 'store']);
    });
});

require __DIR__.'/auth.php';
