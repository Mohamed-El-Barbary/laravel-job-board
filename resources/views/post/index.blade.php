<x-layout title="Posts Page">
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="max-w-5xl mx-auto px-4">
            <!-- Header with Create Post button -->
            <div class="flex items-center justify-between mb-8">
                <h1 class="text-3xl font-bold text-gray-800">All Posts</h1>

                <a
                    href="/blog/create"
                    class="px-5 py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition shadow-md"
                >
                    + Create Post
                </a>
            </div>

            <!-- Posts List -->
            @foreach ($posts as $post)
                <div
                    class="bg-white rounded-2xl shadow-md p-6 mb-6 hover:shadow-xl hover:-translate-y-1 transition duration-300"
                >
                    <span class="text-xs text-gray-500">{{ $post->author }}</span>
                    <span class="text-xs text-gray-500 ml-2">{{ $post->id }}</span>
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">
                        {{ $post->title }}
                    </h2>

                    <p class="text-gray-600 mb-4 leading-relaxed">
                        {{ $post->body }}
                    </p>

                    <button
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition"
                    >
                        View Details
                    </button>

                    <div class="mt-4">
                        <h3 class="text-sm font-medium text-gray-700 mb-2">Tags:</h3>

                        @foreach ($post->tags as $tag)
                            <span
                                class="inline-block px-3 py-1 text-xs font-medium bg-blue-100 text-blue-700 rounded-full"
                            >
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
                            class="px-3 py-1 bg-blue-500 text-white rounded-lg text-sm font-medium hover:bg-blue-600 transition mt-2"
                        >
                            <a href="/comments/{{ $comment->id }}">View Comment Details</a>
                        </button>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
    {{ $posts->links() }}
</x-layout>
