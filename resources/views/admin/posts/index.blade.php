@extends('admin.layout')

@section('content')
    <div class="space-y-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-3xl font-semibold">Posts</h1>
                <p class="text-slate-500 dark:text-slate-400">Manage posts records.</p>
            </div>
            <a href="{{ route('admin.posts.create') }}" class="inline-flex rounded-full bg-amber-500 px-4 py-2 text-sm font-semibold text-white hover:bg-amber-600">Add Post</a>
        </div>
        <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm dark:border-slate-800 dark:bg-slate-900">
            <table class="min-w-full border-collapse text-left text-sm">
                <thead class="bg-slate-100 text-slate-700 dark:bg-slate-950 dark:text-slate-200">
                    <tr>
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                    @foreach($posts as $post)
                        <tr>
                            <td class="px-4 py-4 text-slate-500 dark:text-slate-400">{{ $post->id }}</td>
                            <td class="px-4 py-4 font-medium text-slate-900 dark:text-white">{{ $post->title ?? $post->name ?? 'Item' }}</td>
                            <td class="px-4 py-4 text-slate-500 dark:text-slate-400">{{ $post->is_active ? 'Active' : 'Draft' }}</td>
                            <td class="px-4 py-4 space-x-2">
                                <a href="{{ route('admin.posts.edit', $post) }}" class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-200">Edit</a>
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded-full bg-rose-500 px-3 py-1 text-xs font-semibold text-white hover:bg-rose-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>{{ $posts->links() }}</div>
    </div>
@endsection
