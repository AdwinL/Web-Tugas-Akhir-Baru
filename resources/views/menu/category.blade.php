@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#E86F45]">{{ $category->name }}</p>
                <h1 class="mt-6 text-4xl font-black tracking-tight text-[#073842] sm:text-5xl">{{ $category->description ?: 'Menu category' }}</h1>
                <p class="mt-6 text-lg leading-8 text-[#315A5F]">A carefully curated selection from our kitchen, designed to bring out the best of each ingredient and season.</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach($category->menus as $item)
                <article class="card-surface p-8">
                    <h2 class="text-2xl font-semibold text-[#073842]">{{ $item->title }}</h2>
                    <p class="mt-3 text-sm leading-7 text-[#315A5F]">{{ $item->description }}</p>
                    <p class="mt-6 text-xl font-semibold text-[#E86F45]">{{ $item->price ? 'Rp ' . number_format($item->price, 0, ',', '.') : 'Ask for price' }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
