<x-layout title="{{ $post->title }}">
    <div class="max-w-4xl mx-auto mt-10">
        @if (session('success'))
        <div
            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
            role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        <div class="bg-white shadow-lg rounded-xl p-8 border">
            <span class="text-xs text-gray-500">{{ $post->author }}</span>

            <h1 class="text-3xl font-bold mb-4">
                {{ $post->title }}
            </h1>

            <p class="text-gray-700 mb-6">
                {{ $post->body }}
            </p>

            <div class="text-sm text-gray-500">Posted at: {{ $post->created_at->format('Y-m-d') }}</div>

            <!-- Comment Action -->
            <div class="mt-6">
                <!-- Button -->
                <button
                    command="show-modal"
                    commandfor="comment-dialog-{{ $post->id }}"
                    class="rounded-md bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700 transition">
                    Add Comment
                </button>

                <el-dialog>
                    <dialog
                        id="comment-dialog-{{ $post->id }}"
                        aria-labelledby="dialog-title-{{ $post->id }}"
                        class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                        <!-- Transparent Backdrop -->
                        <el-dialog-backdrop class="fixed inset-0 bg-transparent"></el-dialog-backdrop>

                        <div tabindex="0" class="flex min-h-full items-center justify-center p-4 text-center">
                            <el-dialog-panel
                                class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all duration-300 ease-out sm:w-full sm:max-w-lg scale-95 data-open:scale-100">
                                <!-- Header -->
                                <div class="px-6 pt-6">
                                    <h3 id="dialog-title-{{ $post->id }}" class="text-xl font-semibold text-gray-900">
                                        Add a Comment
                                    </h3>
                                </div>

                                <!-- Body -->
                                <div class="px-6 py-4">
                                    <form action="/comments" method="POST" class="space-y-4">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                        <!-- Author -->
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                                Your Name
                                            </label>
                                            <input
                                                type="text"
                                                name="author"
                                                required
                                                value="{{ old('author') }}"
                                                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition"
                                                placeholder="Enter your name" />
                                            @error('author')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Content -->
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Comment</label>
                                            <textarea
                                                name="content"
                                                rows="4"
                                                required
                                                class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition"
                                                placeholder="Write your comment...">
                                            {{ old('content') }}
                                            </textarea>
                                            @error('content')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Actions -->
                                        <div class="flex justify-end gap-3 pt-4 border-t">
                                            <!-- Cancel -->
                                            <button
                                                type="button"
                                                command="close"
                                                commandfor="comment-dialog-{{ $post->id }}"
                                                class="px-4 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition">
                                                Cancel
                                            </button>
                                            <!-- Submit -->
                                            <button
                                                type="submit"
                                                class="px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </el-dialog-panel>
                        </div>
                    </dialog>
                </el-dialog>
            </div>
            <h2 class="text-2xl font-semibold mt-8 mb-4">Comments</h2>

            @foreach ($post->comments as $comment)
            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                <div class="flex justify-between items-center">
                    <span class="text-xs text-gray-500">{{ $comment->author }}</span>
                    <!-- Comment Action -->
                    <div class="flex gap-2 items-center">
                        <!-- Edit -->
                        <div class="">
                            <!-- Button -->
                            <button
                                command="show-modal"
                                commandfor="comment-dialog-{{ $comment->id }}"
                                class="rounded-md bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700 transition">
                                Edit Comment
                            </button>

                            <el-dialog>
                                <dialog
                                    id="comment-dialog-{{ $comment->id }}"
                                    aria-labelledby="dialog-title-{{ $comment->id }}"
                                    class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                                    <!-- Transparent Backdrop -->
                                    <el-dialog-backdrop class="fixed inset-0 bg-transparent"></el-dialog-backdrop>

                                    <div tabindex="0" class="flex min-h-full items-center justify-center p-4 text-center">
                                        <el-dialog-panel
                                            class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all duration-300 ease-out sm:w-full sm:max-w-lg scale-95 data-open:scale-100">
                                            <!-- Header -->
                                            <div class="px-6 pt-6">
                                                <h3 id="dialog-title-{{ $comment->id }}" class="text-xl font-semibold text-gray-900">
                                                    Edit a Comment
                                                </h3>
                                            </div>

                                            <!-- Body -->
                                            <div class="px-6 py-4">
                                                <form action="/comments/{{ $comment->id }}" method="POST" class="space-y-4">
                                                    @csrf
                                                    @method('PUT')
                                                    <!-- Author -->
                                                    <div>
                                                        <label class="block text-sm font-medium text-gray-700 mb-1">
                                                            Your Name
                                                        </label>
                                                        <input
                                                            type="text"
                                                            name="author"
                                                            required
                                                            value="{{ old('author', $comment->author) }}"
                                                            class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition"
                                                            placeholder="Enter your name" />
                                                        @error('author')
                                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <!-- Content -->
                                                    <div>
                                                        <label class="block text-sm font-medium text-gray-700 mb-1">Comment</label>
                                                        <textarea
                                                            name="content"
                                                            rows="4"
                                                            required
                                                            class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition"
                                                            placeholder="Write your comment...">
                                                        {{ old('content', $comment->content) }}
                                                        </textarea>
                                                        @error('content')
                                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <!-- Actions -->
                                                    <div class="flex justify-end gap-3 pt-4 border-t">
                                                        <!-- Cancel -->
                                                        <button
                                                            type="button"
                                                            command="close"
                                                            commandfor="comment-dialog-{{ $comment->id }}"
                                                            class="px-4 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition">
                                                            Cancel
                                                        </button>
                                                        <!-- Submit -->
                                                        <button
                                                            type="submit"
                                                            class="px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </el-dialog-panel>
                                    </div>
                                </dialog>
                            </el-dialog>
                        </div>
                        <!-- Delete -->
                        <div class="">
                            <form action="/comments/{{ $comment->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    class="px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700 transition">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 mt-2">
                    {{ $comment->content }}
                </p>
                <a href="/comments/{{ $comment->id }}"
                    class="px-3 py-1 bg-blue-500 text-white rounded-lg text-sm font-medium hover:bg-blue-600 transition mt-2 inline-block">
                    View Comment Details
                </a>
            </div>
            @endforeach
        </div>

        <button class="mt-4">
            <a
                href="/blog"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition">
                Back to Posts
            </a>
        </button>
    </div>
</x-layout>