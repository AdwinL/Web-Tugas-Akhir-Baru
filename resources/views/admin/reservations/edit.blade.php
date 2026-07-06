@extends('admin.layout')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-semibold">Manage Reservation</h1>
                <p class="text-slate-500 dark:text-slate-400">Update status and notes for the booking.</p>
            </div>
            <a href="{{ route('admin.reservations.index') }}" class="rounded-full border border-slate-300 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:border-slate-700 dark:text-slate-300">Back</a>
        </div>
        <div class="rounded-3xl bg-white p-6 shadow-sm dark:bg-slate-900">
            <form action="{{ route('admin.reservations.update', $reservation) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Status</span>
                    <select name="status" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
                        <option value="pending" {{ $reservation->status === 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="approved" {{ $reservation->status === 'approved' ? 'selected' : '' }}>Approved</option>
                        <option value="rejected" {{ $reservation->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Notes</span>
                    <textarea name="notes" rows="4" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">{{ old('notes', $reservation->notes) }}</textarea>
                </label>
                <button type="submit" class="inline-flex rounded-full bg-amber-500 px-5 py-3 text-sm font-semibold text-white hover:bg-amber-600">Update reservation</button>
            </form>
        </div>
    </div>
@endsection
