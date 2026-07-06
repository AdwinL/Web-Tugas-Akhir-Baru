@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-end">
                <div class="relative max-w-2xl">
                    <div class="inline-flex items-center gap-2 rounded-full border border-[#073842]/10 bg-white/70 px-4 py-2 text-sm font-semibold uppercase tracking-[0.3em] text-[#E86F45] shadow-sm">
                        <span class="h-2.5 w-2.5 rounded-full bg-[#E86F45]"></span>
                        Beachside dining • open daily
                    </div>
                    <h1 class="mt-6 text-5xl font-black leading-[0.95] tracking-tight text-[#073842] sm:text-6xl lg:text-7xl">A coastal restaurant experience made for relaxed luxury.</h1>
                    <p class="mt-6 text-lg leading-8 text-[#315A5F]">From sunset dinners to elegant private events, Surya Lagoon brings a warm and polished feeling to every table, celebration, and long evening by the sea.</p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="#reserve" class="inline-flex items-center justify-center rounded-full bg-[#E86F45] px-6 py-3 text-base font-semibold text-white shadow-lg shadow-[#E86F45]/20 transition hover:bg-[#d85e33]">Reserve a table</a>
                        <a href="{{ route('menu.index') }}" class="inline-flex items-center justify-center rounded-full border border-[#073842]/10 bg-white px-6 py-3 text-base font-semibold text-[#073842] transition hover:border-[#E86F45] hover:text-[#E86F45]">Explore the menu</a>
                    </div>
                    <div class="mt-8 flex flex-wrap gap-3 text-sm text-[#315A5F]">
                        <span class="rounded-full border border-[#073842]/10 bg-white/80 px-3 py-2">Ocean-view terrace</span>
                        <span class="rounded-full border border-[#073842]/10 bg-white/80 px-3 py-2">Live acoustic evenings</span>
                        <span class="rounded-full border border-[#073842]/10 bg-white/80 px-3 py-2">Private event hosting</span>
                    </div>
                </div>

                <div class="card-surface p-8">
                    <div class="flex items-center gap-3 text-sm font-semibold uppercase tracking-[0.3em] text-[#E86F45]">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full bg-[#F8E8D8] text-lg">☼</span>
                        Tonight’s highlight
                    </div>
                    <h2 class="mt-4 text-3xl font-semibold text-[#073842]">Sunset seafood platter</h2>
                    <p class="mt-3 text-base leading-7 text-[#315A5F]">Enjoy grilled prawns, citrus herb fish, and tropical sides served with the calm, polished atmosphere that makes every evening feel special.</p>
                    <div class="mt-6 rounded-[1.5rem] border border-[#073842]/10 bg-[#FFF9F1] p-4">
                        <div class="flex items-center justify-between text-sm text-[#315A5F]">
                            <span>Open daily • 11:00 - 23:00</span>
                            <span class="font-semibold text-[#073842]">Call now</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div id="framer-showcase"></div>
    </section>

    @if($announcements->isNotEmpty())
        <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="card-surface p-6">
                <div class="flex items-center justify-between gap-4">
                    <h2 class="text-xl font-semibold text-[#073842]">Announcements</h2>
                    <span class="rounded-full bg-[#F8E8D8] px-3 py-1 text-sm font-semibold text-[#E86F45]">Live updates</span>
                </div>
                <div class="mt-4 space-y-4 text-[#315A5F]">
                    @foreach($announcements as $announcement)
                        <div class="rounded-[1.25rem] border border-[#073842]/10 bg-[#FFF9F1] p-4">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="font-semibold text-[#073842]">{{ $announcement->title }}</p>
                                    <p class="mt-1 text-sm">{{ $announcement->content }}</p>
                                </div>
                                @if($announcement->link)
                                    <a href="{{ $announcement->link }}" class="text-[#E86F45] hover:text-[#d85e33]">Learn more</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="card-surface p-8">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <p class="text-sm uppercase tracking-[0.3em] text-[#E86F45]">Signature dishes</p>
                    <h2 class="mt-3 text-3xl font-semibold text-[#073842]">Fresh flavors, coastal charm, and elegant presentation.</h2>
                </div>
                <a href="{{ route('menu.index') }}" class="inline-flex text-sm font-semibold text-[#073842] hover:text-[#E86F45]">See full menu →</a>
            </div>
            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <div class="rounded-[1.5rem] border border-[#073842]/10 bg-[#FFF9F1] p-5">
                    <p class="text-lg font-semibold text-[#073842]">Grilled Reef Catch</p>
                    <p class="mt-2 text-sm leading-7 text-[#315A5F]">Charred fish with citrus herb glaze and ocean breeze salsa.</p>
                </div>
                <div class="rounded-[1.5rem] border border-[#073842]/10 bg-[#FFF9F1] p-5">
                    <p class="text-lg font-semibold text-[#073842]">Tropical Seafood Pasta</p>
                    <p class="mt-2 text-sm leading-7 text-[#315A5F]">Creamy tomato base, shellfish, and a hint of island spice.</p>
                </div>
                <div class="rounded-[1.5rem] border border-[#073842]/10 bg-[#FFF9F1] p-5">
                    <p class="text-lg font-semibold text-[#073842]">Sunset Dessert Plate</p>
                    <p class="mt-2 text-sm leading-7 text-[#315A5F]">Coconut panna cotta, tropical fruit, and caramelized sugar.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="text-sm uppercase tracking-[0.3em] text-[#E86F45]">Featured events</p>
                <h2 class="mt-4 text-4xl font-semibold tracking-tight text-[#073842]">Curated spaces for every celebration by the sea.</h2>
                <p class="mt-6 text-lg leading-8 text-[#315A5F]">From intimate dinners to large receptions, our team creates polished experiences with custom menus, coastal décor, and seamless hosting.</p>
            </div>
            <div class="grid gap-6 sm:grid-cols-2">
                @foreach($featuredEvents as $event)
                    <article class="rounded-[1.5rem] border border-[#073842]/10 bg-white/80 p-6 shadow-sm">
                        <p class="text-sm font-semibold text-[#E86F45]">{{ $event->event_type }}</p>
                        <h3 class="mt-4 text-xl font-semibold text-[#073842]">{{ $event->title }}</h3>
                        <p class="mt-2 text-sm leading-6 text-[#315A5F]">{{ Str::limit($event->description, 120) }}</p>
                        <a href="{{ route('events.show', $event) }}" class="mt-4 inline-flex text-sm font-semibold text-[#073842] hover:text-[#E86F45]">View details →</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-[#073842] text-white">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                <div>
                    <p class="text-sm uppercase tracking-[0.3em] text-[#F4A261]">Reserve with ease</p>
                    <h2 class="mt-4 text-4xl font-semibold">A smooth booking experience for dinner dates and special celebrations.</h2>
                    <p class="mt-6 max-w-xl text-lg leading-8 text-slate-300">Check availability, request a preferred time, and plan your evening with our easy online reservation flow.</p>
                </div>
                <div id="reserve">
                    @include('partials.reservation-form')
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-10 xl:grid-cols-[1.7fr_0.8fr_0.8fr]">
            <div class="card-surface p-6 sm:p-8">
                <p class="text-sm uppercase tracking-[0.3em] text-[#E86F45]">What guests say</p>
                <div class="mt-6 grid gap-6 md:grid-cols-2">
                    @foreach ($testimonials as $testimonial)
                        <div class="flex h-full flex-col rounded-[1.5rem] border border-[#073842]/10 bg-[#FFF9F1] p-6 shadow-sm">
                            <div class="flex items-center gap-4">
                                @if ($testimonial['photo'])
                                    <img src="{{ $testimonial['photo'] }}" alt="{{ $testimonial['name'] }}" class="h-12 w-12 rounded-full object-cover" />
                                @else
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#F8E8D8] text-[#E86F45]">
                                        {{ strtoupper(substr($testimonial['name'], 0, 1)) }}
                                    </div>
                                @endif
                                <div class="min-w-0">
                                    @if (!empty($testimonial['author_url']))
                                        <a href="{{ $testimonial['author_url'] }}" target="_blank" rel="nofollow noreferrer" class="block truncate font-semibold text-[#073842]">{{ $testimonial['name'] }}</a>
                                    @else
                                        <p class="truncate font-semibold text-[#073842]">{{ $testimonial['name'] }}</p>
                                    @endif
                                    <p class="text-xs text-[#315A5F]">{{ $testimonial['relative_time'] ?? '' }}</p>
                                </div>
                            </div>
                            @if (!empty($testimonial['rating']))
                                <div class="mt-4 flex items-center gap-2 text-[#E86F45]">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <span class="text-sm">{!! $i <= $testimonial['rating'] ? '&#9733;' : '&#9734;' !!}</span>
                                    @endfor
                                    <span class="text-xs text-[#315A5F]">{{ $testimonial['rating'] }}/5</span>
                                </div>
                            @endif
                            <p class="mt-4 flex-1 text-base leading-8 text-[#315A5F]">"{{ $testimonial['comment'] }}"</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="space-y-10">
                <div class="card-surface p-8">
                    <p class="text-sm uppercase tracking-[0.3em] text-[#E86F45]">Latest news</p>
                    <div class="mt-6 space-y-6 text-[#315A5F]">
                        @foreach($blogPosts as $post)
                            <article>
                                <p class="font-semibold text-[#073842]">{{ $post->title }}</p>
                                <p class="mt-2 text-sm">{{ Str::limit($post->excerpt, 120) }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="card-surface p-8">
                    <p class="text-sm uppercase tracking-[0.3em] text-[#073842]">Our partners</p>
                    <div class="mt-6 grid gap-4 text-[#315A5F]">
                        @foreach($partners as $partner)
                            <div class="rounded-[1rem] border border-[#073842]/10 bg-[#FFF9F1] p-4">{{ $partner->name }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
