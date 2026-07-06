@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#E86F45]">Promotions</p>
                <h1 class="mt-6 text-4xl font-black tracking-tight text-[#073842] sm:text-5xl">Seasonal offers for your next coastal celebration.</h1>
                <p class="mt-6 text-lg leading-8 text-[#315A5F]">Discover limited-time dining perks and event packages designed to make each visit feel elevated.</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-3">
            @foreach($promos as $promo)
                <article class="card-surface p-8">
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#E86F45]">{{ $promo->code ?: 'Promo' }}</p>
                    <h2 class="mt-4 text-2xl font-semibold text-[#073842]">{{ $promo->title }}</h2>
                    <p class="mt-3 text-sm leading-7 text-[#315A5F]">{{ $promo->description }}</p>
                    <div class="mt-6 text-sm font-medium text-[#315A5F]">Valid until {{ $promo->ends_at?->format('F j, Y') ?? 'TBA' }}</div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
