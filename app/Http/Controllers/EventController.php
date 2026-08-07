<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        // Ambil event aktif, urutkan berdasarkan waktu mulai terbaru
        $events = Event::where('is_active', true)->latest('starts_at')->get();

        // Tampilkan view `events.index` dengan variabel $events
        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        // Tampilkan detail event pada view `events.show`
        return view('events.show', compact('event'));
    }
}
