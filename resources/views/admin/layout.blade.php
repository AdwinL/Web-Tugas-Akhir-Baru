<!DOCTYPE html>
<html lang="en" x-data="{ dark: localStorage.getItem('surya-dark') === 'true' }" x-init="$watch('dark', value => localStorage.setItem('surya-dark', value))" x-bind:class="{ 'dark': dark }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Surya Lagoon Admin') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-50 text-slate-900 dark:bg-slate-950 dark:text-slate-100">
        <div class="flex min-h-screen flex-col">
            <header class="border-b border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900">
                <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-3">
                        <div class="h-10 w-10 rounded-xl bg-amber-500 text-center leading-10 text-white">A</div>
                        <div>
                            <p class="text-lg font-semibold">Surya Lagoon Admin</p>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Manage bookings, content, and offers.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{ route('home') }}" class="rounded-full border border-slate-300 px-4 py-2 text-sm transition hover:bg-slate-100 dark:border-slate-700 dark:hover:bg-slate-800">View site</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="rounded-full bg-amber-500 px-4 py-2 text-sm font-semibold text-white hover:bg-amber-600">Sign out</button>
                        </form>
                    </div>
                </div>
            </header>
            <div class="mx-auto flex w-full max-w-7xl flex-1 gap-6 px-4 py-8 sm:px-6 lg:px-8">
                <aside class="w-80 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <nav class="space-y-2 text-sm text-slate-700 dark:text-slate-300">
                        <a href="{{ route('admin.dashboard') }}" class="block rounded-2xl px-4 py-3 font-semibold text-slate-900 hover:bg-slate-100 dark:text-slate-100 dark:hover:bg-slate-800">Dashboard</a>
                        <a href="{{ route('admin.menus.index') }}" class="block rounded-2xl px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-800">Menus</a>
                        <a href="{{ route('admin.events.index') }}" class="block rounded-2xl px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-800">Events</a>
                        <a href="{{ route('admin.promos.index') }}" class="block rounded-2xl px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-800">Promos</a>
                        <a href="{{ route('admin.posts.index') }}" class="block rounded-2xl px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-800">Blog</a>
                        <a href="{{ route('admin.announcements.index') }}" class="block rounded-2xl px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-800">Announcements</a>
                        <a href="{{ route('admin.galleries.index') }}" class="block rounded-2xl px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-800">Gallery</a>
                        <a href="{{ route('admin.faqs.index') }}" class="block rounded-2xl px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-800">FAQ</a>
                        <a href="{{ route('admin.contacts.edit', 1) }}" class="block rounded-2xl px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-800">Contact Info</a>
                        <a href="{{ route('admin.partners.index') }}" class="block rounded-2xl px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-800">Partners</a>
                        <a href="{{ route('admin.reservations.index') }}" class="block rounded-2xl px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-800">Reservations</a>
                    </nav>
                </aside>
                <div class="flex-1">
                    @if(session('success'))
                        <div class="mb-6 rounded-3xl bg-emerald-500/10 p-4 text-emerald-900 dark:bg-emerald-500/15 dark:text-emerald-200">{{ session('success') }}</div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
