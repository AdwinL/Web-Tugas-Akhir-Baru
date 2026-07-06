@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr]">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#E86F45]">{{ $event->event_type }}</p>
                    <h1 class="mt-6 text-4xl font-black tracking-tight text-[#073842] sm:text-5xl">{{ $event->title }}</h1>
                    <p class="mt-6 text-lg leading-8 text-[#315A5F]">{{ $event->description }}</p>

                    <div class="mt-8 rounded-[1.75rem] border border-[#073842]/10 bg-white/80 p-8 shadow-sm backdrop-blur">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#E86F45]">Price range</p>
                        <p class="mt-3 text-3xl font-semibold text-[#E86F45]">{{ $event->price_range ?: 'Custom quote' }}</p>
                        <p class="mt-4 text-sm leading-7 text-[#315A5F]">Book a tailored experience for your wedding, birthday, live music, or corporate event.</p>
                    </div>
                </div>

                <div class="card-surface p-8">
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#073842]">Event details</p>
                    <ul class="mt-6 space-y-4 text-[#315A5F]">
                        <li><span class="font-semibold text-[#073842]">Schedule:</span> {{ $event->starts_at?->format('M j, Y') ?? 'Flexible' }} — {{ $event->ends_at?->format('M j, Y') ?? 'Flexible' }}</li>
                        <li><span class="font-semibold text-[#073842]">Type:</span> {{ $event->event_type }}</li>
                        <li><span class="font-semibold text-[#073842]">Category:</span> {{ $event->category?->name ?? 'General' }}</li>
                    </ul>
                    <a href="{{ route('contact.index') }}" class="mt-8 inline-flex w-full items-center justify-center rounded-full bg-[#E86F45] px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#d85e33]">Request this event</a>
                </div>
            </div>
        </div>
    </section>
@endsection
