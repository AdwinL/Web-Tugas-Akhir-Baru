@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-5xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="rounded-[2rem] border border-[#073842]/10 bg-white/80 p-8 shadow-[0_18px_60px_-24px_rgba(7,56,66,0.2)] backdrop-blur sm:p-10">
                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#E86F45]">Blog</p>
                <h1 class="mt-6 text-4xl font-black tracking-tight text-[#073842] sm:text-5xl">{{ $post->title }}</h1>
                <p class="mt-4 text-sm text-[#315A5F]">Published on {{ $post->published_at?->format('F j, Y') }}</p>
                <div class="prose prose-slate mt-8 max-w-none text-[#315A5F]">
                    {!! nl2br(e($post->content)) !!}
                </div>
            </div>
        </div>
    </section>
@endsection
