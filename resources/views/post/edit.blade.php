<x-layout title="Edit Post">
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="max-w-3xl mx-auto px-6">
            <!-- Card -->
            <div class="bg-white shadow-xl rounded-2xl p-8">
                <!-- Title -->
                <div class="flex items-center justify-between mb-8">
                    <h1 class="text-3xl font-bold text-gray-800">Edit Post</h1>

                    <span class="px-3 py-1 text-xs font-medium bg-yellow-100 text-yellow-700 rounded-full">Draft</span>
                </div>

                <form method="post" action="/blog/{{ $post->id }}" class="space-y-6">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" value="{{ $post->id }}" />
                    <!-- Title -->
                    <div class="grid md:grid-cols-full gap-6">
                        <!-- Post Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Post Title</label>
                            <input
                                type="text"
                                id="title"
                                name="title"
                                value="{{ old('title', $post->title) }}"
                                class="{{ $errors->has('title') ? 'border-red-500' : 'border-gray-300' }} w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                placeholder="Enter post title"
                            />
                            @error('title')
                                <p class="text-sm text-red-600 mt-2 bg-red-50 p-2 rounded">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Content -->
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                        <textarea
                            id="content"
                            name="body"
                            rows="6"
                            class="{{ $errors->has('body') ? 'border-red-500' : 'border-gray-300' }} w-full px-4 py-3 rounded-xl border focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                            placeholder="Write post content..."
                        >
                            {{ old('body', $post->body) }}</textarea
                        >
                        @error('body')
                            <p class="text-sm text-red-600 mt-2 bg-red-50 p-2 rounded">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Published Toggle -->
                    <div class="flex items-center justify-between bg-gray-50 px-4 py-3 rounded-xl border">
                        <div>
                            <p class="text-sm font-medium text-gray-700">Publish Post</p>
                            <p class="text-xs text-gray-500">Make this post visible to everyone or save as draft</p>
                        </div>

                        <input
                            type="checkbox"
                            name="published"
                            value="1"
                            class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                            {{ old('published') || (! old() && $post->published) ? 'checked' : '' }}
                        />
                    </div>

                    <!-- Tags -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tags</label>

                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 text-xs font-medium bg-blue-100 text-blue-700 rounded-full cursor-pointer hover:bg-blue-600 hover:text-white transition"
                            >
                                Laravel
                            </span>

                            <span
                                class="px-3 py-1 text-xs font-medium bg-green-100 text-green-700 rounded-full cursor-pointer hover:bg-green-600 hover:text-white transition"
                            >
                                Remote
                            </span>

                            <span
                                class="px-3 py-1 text-xs font-medium bg-purple-100 text-purple-700 rounded-full cursor-pointer hover:bg-purple-600 hover:text-white transition"
                            >
                                Full-Time
                            </span>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end gap-4 pt-4">
                        <button
                            type="button"
                            class="px-5 py-2 rounded-xl border border-gray-300 text-gray-600 hover:bg-gray-100 transition"
                        >
                            <a href="/blog" class="block w-full h-full">Cancel</a>
                        </button>

                        <button
                            type="submit"
                            class="px-6 py-2 rounded-xl bg-blue-600 text-white font-medium hover:bg-blue-700 transition shadow-md"
                        >
                            Save Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
