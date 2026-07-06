@extends('layouts.app')
@section('content')
    <section class="relative overflow-hidden">
        <div class="hero-glow absolute inset-0"></div>
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            <div class="mx-auto max-w-3xl text-center">
                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-[#E86F45]">News & stories</p>
                <h1 class="mt-6 text-4xl font-black tracking-tight text-[#073842] sm:text-5xl">The latest updates, events, and stories from Surya Lagoon.</h1>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-3">
            @foreach($posts as $post)
                <article class="card-surface p-8">
                    <h2 class="text-2xl font-semibold text-[#073842]">{{ $post->title }}</h2>
                    <p class="mt-3 text-sm leading-7 text-[#315A5F]">{{ $post->excerpt }}</p>
                    <div class="mt-6 flex items-center justify-between text-sm text-[#315A5F]">
                        <span>{{ $post->published_at?->format('F j, Y') }}</span>
                        <a href="{{ route('blog.show', $post) }}" class="font-semibold text-[#073842] hover:text-[#E86F45]">Read more →</a>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-10">{{ $posts->links() }}</div>
    </section>
@endsection
