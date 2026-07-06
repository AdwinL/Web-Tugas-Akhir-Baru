@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#E86F45]">About Surya Lagoon</p>
                    <h1 class="mt-6 text-4xl font-black tracking-tight text-[#073842] sm:text-5xl">A relaxed coastal destination for dining, celebration, and unforgettable hospitality.</h1>
                    <p class="mt-6 text-lg leading-8 text-[#315A5F]">Surya Lagoon blends elegant table service with polished event planning, curated menus, and a calm atmosphere that feels just as special for a dinner date as it does for a landmark celebration.</p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">
                        <div class="rounded-[1.5rem] border border-[#073842]/10 bg-white/80 p-6 shadow-sm backdrop-blur">
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#E86F45]">Experience</p>
                            <p class="mt-2 text-sm leading-7 text-[#315A5F]">Personalized support, seamless coordination, and a modern dining atmosphere from start to finish.</p>
                        </div>
                        <div class="rounded-[1.5rem] border border-[#073842]/10 bg-white/80 p-6 shadow-sm backdrop-blur">
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#073842]">Quality</p>
                            <p class="mt-2 text-sm leading-7 text-[#315A5F]">Fresh ingredients, thoughtful presentation, and professional service at every table.</p>
                        </div>
                    </div>
                </div>

                <div class="card-surface p-8">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#E86F45]">Our team</p>
                            <h2 class="mt-2 text-2xl font-semibold text-[#073842]">A warm, attentive crew behind every experience.</h2>
                        </div>
                    </div>
                    <div class="mt-8 grid gap-4">
                        @foreach($team as $member)
                            <div class="rounded-[1.25rem] border border-[#073842]/10 bg-[#FFF9F1] p-5">
                                <p class="text-lg font-semibold text-[#073842]">{{ $member['name'] }}</p>
                                <p class="mt-1 text-sm text-[#315A5F]">{{ $member['role'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
