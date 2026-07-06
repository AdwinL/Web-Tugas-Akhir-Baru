@extends('admin.layout')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-semibold">Create Gallerie</h1>
            </div>
            <a href="{{ route('admin.galleries.index') }}" class="rounded-full border border-slate-300 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:border-slate-700 dark:text-slate-300">Back</a>
        </div>
        <div class="rounded-3xl bg-white p-6 shadow-sm dark:bg-slate-900">
            <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Caption</span>
                    <input type="text" name="caption" value="{{ old('caption') }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Image</span>
                    <input type="file" name="image" class="mt-2 w-full text-sm text-slate-700 dark:text-slate-300" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Category</span>
                    <input type="text" name="category" value="{{ old('category') }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="inline-flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                    <input type="checkbox" name="is_active" value="1" class="h-4 w-4 rounded border-slate-300 text-amber-500 focus:ring-amber-400" />
                    Is Active
                </label>
                <button type="submit" class="inline-flex rounded-full bg-amber-500 px-5 py-3 text-sm font-semibold text-white hover:bg-amber-600">Save</button>
            </form>
        </div>
    </div>
@endsection
