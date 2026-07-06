@extends('admin.layout')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-semibold">Edit Post</h1>
            </div>
            <a href="{{ route('admin.posts.index') }}" class="rounded-full border border-slate-300 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:border-slate-700 dark:text-slate-300">Back</a>
        </div>
        <div class="rounded-3xl bg-white p-6 shadow-sm dark:bg-slate-900">
            <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Title</span>
                    <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Slug</span>
                    <input type="text" name="slug" value="{{ old('slug', $post->slug ?? '') }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Excerpt</span>
                    <textarea name="excerpt" rows=4 class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Content</span>
                    <textarea name="content" rows=4 class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">{{ old('content', $post->content ?? '') }}</textarea>
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Author</span>
                    <input type="text" name="author" value="{{ old('author', $post->author ?? '') }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="block">
                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Published At</span>
                    <input type="datetime-local" name="published_at" value="{{ old('published_at', optional($post->published_at)->format('Y-m-d\TH:i') ?? '') }}" class="mt-2 w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 text-slate-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
                </label>
                <label class="inline-flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                    <input type="checkbox" name="is_active" value="1" class="h-4 w-4 rounded border-slate-300 text-amber-500 focus:ring-amber-400" {{ $post->is_active ? 'checked' : '' }}/>
                    Is Active
                </label>
                <button type="submit" class="inline-flex rounded-full bg-amber-500 px-5 py-3 text-sm font-semibold text-white hover:bg-amber-600">Update</button>
            </form>
        </div>
    </div>
@endsection
