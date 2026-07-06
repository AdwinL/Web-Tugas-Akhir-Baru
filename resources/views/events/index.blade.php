@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#E86F45]">Events</p>
                <h1 class="mt-6 text-4xl font-black tracking-tight text-[#073842] sm:text-5xl">Event packages designed for every celebration by the sea.</h1>
                <p class="mt-6 text-lg leading-8 text-[#315A5F]">From intimate gatherings to full-scale receptions, we create polished experiences with custom menus and seamless hosting.</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-3">
            @foreach($events as $event)
                <article class="card-surface p-8">
                    <span class="inline-flex rounded-full bg-[#F8E8D8] px-3 py-1 text-xs font-semibold uppercase tracking-[0.25em] text-[#E86F45]">{{ $event->event_type }}</span>
                    <h2 class="mt-4 text-2xl font-semibold text-[#073842]">{{ $event->title }}</h2>
                    <p class="mt-3 text-sm leading-7 text-[#315A5F]">{{ Str::limit($event->description, 130) }}</p>
                    <div class="mt-6 flex items-center justify-between text-sm text-[#315A5F]">
                        <span>{{ $event->price_range ?: 'Custom quote' }}</span>
                        <a href="{{ route('events.show', $event) }}" class="font-semibold text-[#073842] hover:text-[#E86F45]">Details →</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
