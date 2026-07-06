@extends('admin.layout')

@section('content')
    <div class="space-y-6">
        <div class="grid gap-6 xl:grid-cols-4">
            <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200 dark:bg-slate-900 dark:ring-slate-800">
                <p class="text-sm uppercase tracking-[0.3em] text-amber-600">Menus</p>
                <p class="mt-4 text-3xl font-semibold">{{ $menuCount }}</p>
            </div>
            <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200 dark:bg-slate-900 dark:ring-slate-800">
                <p class="text-sm uppercase tracking-[0.3em] text-amber-600">Events</p>
                <p class="mt-4 text-3xl font-semibold">{{ $eventCount }}</p>
            </div>
            <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200 dark:bg-slate-900 dark:ring-slate-800">
                <p class="text-sm uppercase tracking-[0.3em] text-amber-600">Reservations</p>
                <p class="mt-4 text-3xl font-semibold">{{ $reservationCount }}</p>
            </div>
            <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200 dark:bg-slate-900 dark:ring-slate-800">
                <p class="text-sm uppercase tracking-[0.3em] text-amber-600">Pending</p>
                <p class="mt-4 text-3xl font-semibold">{{ $pendingReservations }}</p>
            </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200 dark:bg-slate-900 dark:ring-slate-800">
                <h2 class="text-lg font-semibold">Overview</h2>
                <ul class="mt-6 space-y-3 text-slate-600 dark:text-slate-300">
                    <li>Active promos: {{ $promoCount }}</li>
                    <li>Published posts: {{ $postCount }}</li>
                    <li>FAQ entries: {{ $faqCount }}</li>
                    <li>Gallery items: {{ $galleryCount }}</li>
                    <li>Partners: {{ $partnerCount }}</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200 dark:bg-slate-900 dark:ring-slate-800">
                <h2 class="text-lg font-semibold">Announcements</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-300">There are currently {{ $activeAnnouncements }} active announcements ready to display on the homepage.</p>
            </div>
            <div class="rounded-3xl bg-white p-6 shadow-sm ring-1 ring-slate-200 dark:bg-slate-900 dark:ring-slate-800">
                <h2 class="text-lg font-semibold">Contacts</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-300">{{ $contacts }} contact records stored.</p>
            </div>
        </div>
    </div>
@endsection
