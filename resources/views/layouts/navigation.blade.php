<nav class="sticky top-0 z-50 border-b border-[#073842]/10 bg-white/80 backdrop-blur-xl">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-3 font-semibold text-[#073842]">
                <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-gradient-to-br from-[#E86F45] via-[#F4A261] to-[#315A5F] text-sm font-bold text-white shadow-lg">SL</div>
                <div>
                    <p class="text-base font-semibold">Surya Lagoon</p>
                    <p class="text-xs font-medium uppercase tracking-[0.25em] text-[#315A5F]">Restaurant & Events</p>
                </div>
            </a>
            <div class="hidden items-center gap-2 text-sm font-medium text-[#315A5F] md:flex">
                <a href="{{ route('home') }}" class="rounded-full px-3 py-2 transition hover:bg-[#073842]/5 hover:text-[#E86F45]">Home</a>
                <a href="{{ route('about') }}" class="rounded-full px-3 py-2 transition hover:bg-[#073842]/5 hover:text-[#E86F45]">About</a>
                <a href="{{ route('menu.index') }}" class="rounded-full px-3 py-2 transition hover:bg-[#073842]/5 hover:text-[#E86F45]">Menu</a>
                <a href="{{ route('events.index') }}" class="rounded-full px-3 py-2 transition hover:bg-[#073842]/5 hover:text-[#E86F45]">Events</a>
                <a href="{{ route('promos.index') }}" class="rounded-full px-3 py-2 transition hover:bg-[#073842]/5 hover:text-[#E86F45]">Promo</a>
                <a href="{{ route('blog.index') }}" class="rounded-full px-3 py-2 transition hover:bg-[#073842]/5 hover:text-[#E86F45]">Blog</a>
                <a href="{{ route('contact.index') }}" class="rounded-full px-3 py-2 transition hover:bg-[#073842]/5 hover:text-[#E86F45]">Contact</a>
                <a href="{{ route('faq.index') }}" class="rounded-full px-3 py-2 transition hover:bg-[#073842]/5 hover:text-[#E86F45]">FAQ</a>
                <a href="{{ route('career.index') }}" class="rounded-full px-3 py-2 transition hover:bg-[#073842]/5 hover:text-[#E86F45]">Career</a>
            </div>
            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="rounded-full bg-[#E86F45] px-4 py-2 text-sm font-semibold text-white transition hover:bg-[#d85e33]">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="rounded-full border border-[#073842]/10 px-4 py-2 text-sm font-semibold text-[#073842] transition hover:bg-[#073842]/5">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
