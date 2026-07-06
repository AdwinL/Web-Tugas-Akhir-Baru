@extends('admin.layout')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-semibold">Reservation #{{ $reservation->id }}</h1>
                <p class="text-slate-500 dark:text-slate-400">Details for the selected booking request.</p>
            </div>
            <a href="{{ route('admin.reservations.index') }}" class="rounded-full border border-slate-300 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:border-slate-700 dark:text-slate-300">Back</a>
        </div>
        <div class="rounded-3xl bg-white p-6 shadow-sm dark:bg-slate-900">
            <div class="grid gap-4 sm:grid-cols-2">
                <div><strong>Name</strong><p class="mt-1 text-slate-700 dark:text-slate-300">{{ $reservation->name }}</p></div>
                <div><strong>Email</strong><p class="mt-1 text-slate-700 dark:text-slate-300">{{ $reservation->email }}</p></div>
                <div><strong>Phone</strong><p class="mt-1 text-slate-700 dark:text-slate-300">{{ $reservation->phone }}</p></div>
                <div><strong>Date</strong><p class="mt-1 text-slate-700 dark:text-slate-300">{{ $reservation->date->format('M j, Y') }}</p></div>
                <div><strong>Time</strong><p class="mt-1 text-slate-700 dark:text-slate-300">{{ $reservation->time }}</p></div>
                <div><strong>Status</strong><p class="mt-1 text-slate-700 dark:text-slate-300">{{ ucfirst($reservation->status) }}</p></div>
            </div>
            <div class="mt-6">
                <p class="font-semibold">Notes</p>
                <p class="mt-2 text-slate-700 dark:text-slate-300">{{ $reservation->notes ?? 'No notes provided.' }}</p>
            </div>
        </div>
    </div>
@endsection
