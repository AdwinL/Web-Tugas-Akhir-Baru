@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="grid gap-8 lg:grid-cols-[0.95fr_0.95fr] lg:items-start">
                <div class="card-surface p-8">
                    <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#E86F45]">Contact</p>
                    <h1 class="mt-6 text-4xl font-black tracking-tight text-[#073842] sm:text-5xl">Get in touch with Surya Lagoon.</h1>
                    <div class="mt-8 space-y-4 text-[#315A5F]">
                        <div><span class="font-semibold text-[#073842]">Address:</span> {{ $contact->address ?? 'Location details available on request' }}</div>
                        <div><span class="font-semibold text-[#073842]">Phone:</span> {{ $contact->phone ?? '-' }}</div>
                        <div><span class="font-semibold text-[#073842]">Email:</span> {{ $contact->email ?? '-' }}</div>
                        <div><span class="font-semibold text-[#073842]">Opening hours:</span> {{ $contact->opening_hours ?? 'Daily 10:00 - 22:00' }}</div>
                    </div>
                    @if($contact->map_url)
                        <div class="mt-8 overflow-hidden rounded-[1.5rem] border border-[#073842]/10">
                            <iframe src="{{ $contact->map_url }}" class="h-72 w-full" loading="lazy"></iframe>
                        </div>
                    @endif
                </div>

                <div class="card-surface p-8">
                    @include('partials.reservation-form')
                </div>
            </div>
        </div>
    </section>
@endsection
