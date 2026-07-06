@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#E86F45]">Our menu</p>
                <h1 class="mt-6 text-4xl font-black tracking-tight text-[#073842] sm:text-5xl">Fresh flavors, coastal charm, and elegant presentation in every course.</h1>
                <p class="mt-6 text-lg leading-8 text-[#315A5F]">Explore a menu shaped by local ingredients, modern technique, and the effortless energy of a seaside setting.</p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <span class="rounded-full border border-[#073842]/10 bg-white/80 px-3 py-2 text-sm text-[#315A5F]">Signature seafood</span>
                    <span class="rounded-full border border-[#073842]/10 bg-white/80 px-3 py-2 text-sm text-[#315A5F]">Seasonal tasting menus</span>
                    <span class="rounded-full border border-[#073842]/10 bg-white/80 px-3 py-2 text-sm text-[#315A5F]">Private dining options</span>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-8">
            @foreach($categories as $category)
                <section class="card-surface p-8">
                    <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                        <div>
                            <h2 class="text-2xl font-semibold text-[#073842]">{{ $category->name }}</h2>
                            <p class="mt-2 max-w-2xl text-[#315A5F]">{{ $category->description }}</p>
                        </div>
                        <a href="{{ route('menu.category', $category) }}" class="inline-flex text-sm font-semibold text-[#073842] hover:text-[#E86F45]">View full category →</a>
                    </div>
                    <div class="mt-8 grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                        @foreach($category->menus->take(3) as $menu)
                            <article class="rounded-[1.5rem] border border-[#073842]/10 bg-[#FFF9F1] p-6">
                                <h3 class="text-xl font-semibold text-[#073842]">{{ $menu->title }}</h3>
                                <p class="mt-3 text-sm leading-7 text-[#315A5F]">{{ $menu->description }}</p>
                                <div class="mt-4 flex items-center justify-between text-sm font-semibold text-[#E86F45]">
                                    <span>{{ $menu->price ? 'Rp ' . number_format($menu->price, 0, ',', '.') : 'Price on request' }}</span>
                                    <span class="text-[#315A5F]">{{ $menu->category?->name ?? 'Menu' }}</span>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            @endforeach
        </div>
    </section>
@endsection
