<section class="rounded-3xl bg-slate-950/95 p-8 text-white shadow-2xl ring-1 ring-slate-900/10 backdrop-blur-xl">
    <div class="mb-6">
        <h2 class="text-3xl font-semibold">Reserve your event</h2>
        <p class="mt-2 text-slate-300">Book online for weddings, birthdays, corporate gatherings, or live music nights.</p>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded-2xl bg-emerald-500/10 border border-emerald-400/20 p-4 text-emerald-100">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="mb-4 rounded-2xl bg-rose-500/10 border border-rose-400/20 p-4 text-rose-100">
            {{ session('error') }}
            @if(session('alternative'))<div class="mt-2 text-sm">Try <strong>{{ session('alternative') }}</strong> instead.</div>@endif
        </div>
    @endif

    <form action="{{ route('reserve.store') }}" method="POST" class="grid gap-4 sm:grid-cols-2" novalidate>
        @csrf
        <label class="block">
            <span class="text-sm font-medium text-slate-200">Name</span>
            <input type="text" name="name" value="{{ old('name') }}" required class="mt-2 w-full rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-white focus:border-amber-400 focus:outline-none" />
            @error('name')<p class="mt-1 text-sm text-rose-300">{{ $message }}</p>@enderror
        </label>
        <label class="block">
            <span class="text-sm font-medium text-slate-200">Email</span>
            <input type="email" name="email" value="{{ old('email') }}" required class="mt-2 w-full rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-white focus:border-amber-400 focus:outline-none" />
            @error('email')<p class="mt-1 text-sm text-rose-300">{{ $message }}</p>@enderror
        </label>
        <label class="block">
            <span class="text-sm font-medium text-slate-200">Phone</span>
            <input type="tel" name="phone" value="{{ old('phone') }}" required class="mt-2 w-full rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-white focus:border-amber-400 focus:outline-none" />
            @error('phone')<p class="mt-1 text-sm text-rose-300">{{ $message }}</p>@enderror
        </label>
        <label class="block">
            <span class="text-sm font-medium text-slate-200">Event type</span>
            <select name="event_type" required class="mt-2 w-full rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-white focus:border-amber-400 focus:outline-none">
                <option value="">Choose an event</option>
                <option value="Wedding" {{ old('event_type') == 'Wedding' ? 'selected' : '' }}>Wedding</option>
                <option value="Birthday" {{ old('event_type') == 'Birthday' ? 'selected' : '' }}>Birthday</option>
                <option value="Live Music" {{ old('event_type') == 'Live Music' ? 'selected' : '' }}>Live Music</option>
                <option value="Corporate" {{ old('event_type') == 'Corporate' ? 'selected' : '' }}>Corporate</option>
            </select>
            @error('event_type')<p class="mt-1 text-sm text-rose-300">{{ $message }}</p>@enderror
        </label>
        <label class="block">
            <span class="text-sm font-medium text-slate-200">Guest count</span>
            <input type="number" name="guest_count" value="{{ old('guest_count') }}" min="1" required class="mt-2 w-full rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-white focus:border-amber-400 focus:outline-none" />
            @error('guest_count')<p class="mt-1 text-sm text-rose-300">{{ $message }}</p>@enderror
        </label>
        <label class="block">
            <span class="text-sm font-medium text-slate-200">Date</span>
            <input type="date" name="date" value="{{ old('date') }}" required class="mt-2 w-full rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-white focus:border-amber-400 focus:outline-none" />
            @error('date')<p class="mt-1 text-sm text-rose-300">{{ $message }}</p>@enderror
        </label>
        <label class="block">
            <span class="text-sm font-medium text-slate-200">Time</span>
            <input type="time" name="time" value="{{ old('time') }}" required class="mt-2 w-full rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-white focus:border-amber-400 focus:outline-none" />
            @error('time')<p class="mt-1 text-sm text-rose-300">{{ $message }}</p>@enderror
        </label>
        <label class="sm:col-span-2 block">
            <span class="text-sm font-medium text-slate-200">Notes</span>
            <textarea name="notes" rows="4" class="mt-2 w-full rounded-2xl border border-slate-700 bg-slate-900 px-4 py-3 text-white focus:border-amber-400 focus:outline-none">{{ old('notes') }}</textarea>
            @error('notes')<p class="mt-1 text-sm text-rose-300">{{ $message }}</p>@enderror
        </label>
        <label class="sm:col-span-2 inline-flex items-center gap-3 text-slate-200">
            <input type="checkbox" name="whatsapp_opt_in" value="1" class="h-4 w-4 rounded border-slate-500 bg-slate-900 text-amber-500 focus:ring-amber-400" {{ old('whatsapp_opt_in') ? 'checked' : '' }}>
            Receive booking confirmation through WhatsApp
        </label>
        <button type="submit" class="sm:col-span-2 inline-flex justify-center rounded-2xl bg-amber-500 px-6 py-3 text-sm font-semibold text-slate-950 shadow-lg shadow-amber-500/20 transition hover:bg-amber-600">Submit reservation</button>
    </form>
</section>
