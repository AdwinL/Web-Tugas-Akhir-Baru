<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Judul dan meta deskripsi situs --}}
        <title>Surya Lagoon</title>
        <meta name="description" content="Surya Lagoon Restaurant & Event Booking website.">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen antialiased">
        <div class="min-h-screen bg-transparent">
            {{-- Navigasi utama situs --}}
            @include('layouts.navigation')

            {{-- Konten utama; bisa menerima slot (komponen) atau section content --}}
            <main class="min-h-[calc(100vh-5rem)]">
                @isset($slot)
                    {{ $slot }}
                @else
                    @yield('content')
                @endisset
            </main>

            {{-- Footer sederhana --}}
            <footer class="border-t border-[#073842]/10 bg-[#073842]/5 text-[#315A5F]">
                <div class="mx-auto max-w-7xl px-4 py-10 text-center">
                    <p class="text-sm">&copy; {{ date('Y') }} Surya Lagoon. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
