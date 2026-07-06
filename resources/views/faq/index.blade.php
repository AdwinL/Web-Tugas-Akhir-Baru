@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="mx-auto max-w-3xl text-center">
                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#E86F45]">FAQ</p>
                <h1 class="mt-6 text-4xl font-black tracking-tight text-[#073842] sm:text-5xl">Answers to the most common questions about dining and events.</h1>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-6">
            @foreach($faqItems as $item)
                <article class="card-surface p-8">
                    <h2 class="text-xl font-semibold text-[#073842]">{{ $item->question }}</h2>
                    <p class="mt-4 text-sm leading-7 text-[#315A5F]">{{ $item->answer }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
