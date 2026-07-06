
@extends('admin.layout')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-semibold">Edit Event</h1>
            </div>
            <a href="{{ route('admin.events.index') }}" class="rounded-full border border-slate-300 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:border-slate-700 dark:text-slate-300">Back</a>
        </div>
        <div class="rounded-3xl bg-white p-6 shadow-sm dark:bg-slate-900">
            <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Category</span>
                    <select name="category_id" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
                        <option value="">Select category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $event->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Title</span>
                    <input type="text" name="title" value="{{ old('title', $event->title) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Slug</span>
                    <input type="text" name="slug" value="{{ old('slug', $event->slug) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Description</span>
                    <textarea name="description" rows="4" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">{{ old('description', $event->description) }}</textarea>
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Price Range</span>
                    <input type="text" name="price_range" value="{{ old('price_range', $event->price_range) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Event Type</span>
                    <input type="text" name="event_type" value="{{ old('event_type', $event->event_type) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Starts At</span>
                    <input type="datetime-local" name="starts_at" value="{{ old('starts_at', optional($event->starts_at)->format('Y-m-d\TH:i')) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Ends At</span>
                    <input type="datetime-local" name="ends_at" value="{{ old('ends_at', optional($event->ends_at)->format('Y-m-d\TH:i')) }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Image</span>
                    <input type="file" name="image" class="mt-2 w-full text-sm text-slate-700 dark:text-slate-300" />
                </label>
                <label class="inline-flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                    <input type="checkbox" name="is_featured" value="1" class="h-4 w-4 rounded border-slate-300 text-amber-500 focus:ring-amber-400" {{ $event->is_featured ? 'checked' : '' }} />
                    Is Featured
                </label>
                <label class="inline-flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                    <input type="checkbox" name="is_active" value="1" class="h-4 w-4 rounded border-slate-300 text-amber-500 focus:ring-amber-400" {{ $event->is_active ? 'checked' : '' }} />
                    Is Active
                </label>
                <button type="submit" class="inline-flex rounded-full bg-amber-500 px-5 py-3 text-sm font-semibold text-white hover:bg-amber-600">Update</button>
            </form>
        </div>
    </div>
@endsection
