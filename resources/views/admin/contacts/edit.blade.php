@extends('admin.layout')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-semibold">Contact Information</h1>
            </div>
            <a href="{{ route('admin.dashboard') }}" class="rounded-full border border-slate-300 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:border-slate-700 dark:text-slate-300">Back</a>
        </div>
        <div class="rounded-3xl bg-white p-6 shadow-sm dark:bg-slate-900">
            <form action="{{ route('admin.contacts.update', $contact) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Address</span>
                    <input type="text" name="address" value="{{ old('address', $contact->address) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Phone</span>
                    <input type="text" name="phone" value="{{ old('phone', $contact->phone) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Email</span>
                    <input type="email" name="email" value="{{ old('email', $contact->email) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Map URL</span>
                    <input type="url" name="map_url" value="{{ old('map_url', $contact->map_url) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Opening Hours</span>
                    <input type="text" name="opening_hours" value="{{ old('opening_hours', $contact->opening_hours) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <button type="submit" class="inline-flex rounded-full bg-amber-500 px-5 py-3 text-sm font-semibold text-white hover:bg-amber-600">Save</button>
            </form>
        </div>
    </div>
@endsection
