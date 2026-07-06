@extends('admin.layout')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-semibold">Reservations</h1>
                <p class="text-slate-500 dark:text-slate-400">Review and manage all incoming reservation requests.</p>
            </div>
        </div>
        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm dark:border-slate-800 dark:bg-slate-900">
            <table class="min-w-full text-left text-sm text-slate-700 dark:text-slate-300">
                <thead class="bg-slate-100 dark:bg-slate-950">
                    <tr>
                        <th class="px-4 py-4">ID</th>
                        <th class="px-4 py-4">Name</th>
                        <th class="px-4 py-4">Date</th>
                        <th class="px-4 py-4">Status</th>
                        <th class="px-4 py-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                    @foreach($reservations as $reservation)
                        <tr>
                            <td class="px-4 py-4">{{ $reservation->id }}</td>
                            <td class="px-4 py-4">{{ $reservation->name }}</td>
                            <td class="px-4 py-4">{{ $reservation->date->format('M j, Y') }}</td>
                            <td class="px-4 py-4">{{ ucfirst($reservation->status) }}</td>
                            <td class="px-4 py-4 space-x-2">
                                <a href="{{ route('admin.reservations.show', $reservation) }}" class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-200">View</a>
                                <a href="{{ route('admin.reservations.edit', $reservation) }}" class="rounded-full bg-amber-500 px-3 py-1 text-xs font-semibold text-white hover:bg-amber-600">Manage</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>{{ $reservations->links() }}</div>
    </div>
@endsection
