<x-layout title="Posts Page">
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="max-w-5xl mx-auto px-4">
            @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
            @endif

            <!-- Header with Create Post button -->
            <div class="flex items-center justify-between mb-8">
                <h1 class="text-3xl font-bold text-gray-800">All Posts</h1>

                <a
                    href="/blog/create"
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition shadow-md">
                    + Create Post
                </a>
            </div>

            <!-- Posts List -->
            @foreach ($posts as $post)
            <div
                class="bg-white rounded-2xl shadow-md p-6 mb-6 hover:shadow-xl hover:-translate-y-1 transition duration-300">
                <!-- Top Section -->
                <div class="flex justify-between items-start mb-2">
                    <!-- Author + ID -->
                    <div>
                        <span class="text-xs text-gray-500">{{ $post->author }}</span>
                        <span class="text-xs text-gray-500 ml-2">{{ $post->id }}</span>
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center gap-2">
                        <!-- Edit -->
                        <a
                            href="/blog/{{ $post->id }}/edit"
                            class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-lg text-xs font-medium hover:bg-yellow-500 hover:text-white transition">
                            Edit
                        </a>

                        <!-- Delete Button -->
                        <button
                            command="show-modal"
                            commandfor="delete-dialog-{{ $post->id }}"
                            class="pointer-event px-3 py-1 bg-red-100 text-red-700 rounded-lg text-xs font-medium hover:bg-red-500 hover:text-white transition">
                            Delete
                        </button>

                        <el-dialog>
                            <dialog
                                id="delete-dialog-{{ $post->id }}"
                                aria-labelledby="delete-dialog-title-{{ $post->id }}"
                                class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                                <!-- Backdrop -->
                                <el-dialog-backdrop
                                    class="fixed inset-0 bg-gray-900/50 transition-opacity"></el-dialog-backdrop>

                                <div
                                    tabindex="0"
                                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                    <el-dialog-panel
                                        class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                        <!-- Content -->
                                        <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                            <div class="sm:flex sm:items-start">
                                                <!-- Icon -->
                                                <div
                                                    class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                                                    <svg
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-width="1.5"
                                                        class="size-6 text-red-400">
                                                        <path
                                                            d="M6 7h12M9 7V5h6v2m-7 4v6m4-6v6m4-6v6"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>

                                                <!-- Text -->
                                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <h3
                                                        id="delete-dialog-title-{{ $post->id }}"
                                                        class="text-base font-semibold text-white">
                                                        Delete Post
                                                    </h3>

                                                    <div class="mt-2">
                                                        <p class="text-sm text-gray-400">
                                                            Are you sure you want to delete
                                                            <span class="font-semibold text-white">
                                                                "{{ $post->title }}"
                                                            </span>
                                                            ? This action cannot be undone.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Actions -->
                                        <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                            <!-- Confirm Delete -->
                                            <form method="POST" action="/blog/{{ $post->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white hover:bg-red-500 sm:ml-3 sm:w-auto transition">
                                                    Yes, Delete
                                                </button>
                                            </form>

                                            <!-- Cancel -->
                                            <button
                                                type="button"
                                                command="close"
                                                commandfor="delete-dialog-{{ $post->id }}"
                                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white hover:bg-white/20 sm:mt-0 sm:w-auto transition">
                                                Cancel
                                            </button>
                                        </div>
                                    </el-dialog-panel>
                                </div>
                            </dialog>
                        </el-dialog>
                    </div>
                </div>

                <!-- Title -->
                <h2 class="text-xl font-semibold text-gray-900 mb-2">
                    <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
                </h2>

                <!-- Body -->
                <p class="text-gray-600 mb-4 leading-relaxed">
                    {{ $post->body }}
                </p>

                <!-- View -->
                <button
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition">
                    <a href="/blog/{{ $post->id }}">View Details</a>
                </button>

                <!-- Tags -->
                <div class="mt-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-2">Tags:</h3>

                    @foreach ($post->tags as $tag)
                    <span
                        class="inline-block px-3 py-1 text-xs font-medium bg-blue-100 text-blue-700 rounded-full">
                        {{ $tag->title }}
                    </span>
                    @endforeach
                </div>
            </div>

            <!-- Comments -->
            @foreach ($post->comments as $comment)
            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                <span class="text-xs text-gray-500">{{ $comment->author }}</span>
                <p class="text-gray-600 mt-2">
                    {{ $comment->content }}
                </p>
                <button
                    class="px-3 py-1 bg-blue-500 text-white rounded-lg text-sm font-medium hover:bg-blue-600 transition mt-2">
                    <a href="/comments/{{ $comment->id }}">View Comment Details</a>
                </button>
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
    {{ $posts->links() }}
</x-layout>