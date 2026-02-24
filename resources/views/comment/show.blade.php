<x-layout title="{{ $comment->title }}">
    <div class="max-w-4xl mx-auto mt-10">
        <div class="bg-white shadow-lg rounded-xl p-8 border">
            <span class="text-xs text-gray-500">{{ $comment->author }}</span>

            <p class="text-gray-700 mb-6">
                {{ $comment->content }}
            </p>

            <div class="text-sm text-gray-500">Posted at: {{ $comment->created_at->format('Y-m-d') }}</div>

            <div class="text-sm text-gray-500 mt-4">
                On Post:
                {{ $comment->post->title }}
            </div>

            <button class="mt-4">
                <a
                    href="/blog/{{ $comment->post->id }}"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition"
                >
                    View Post Details
                </a>
            </button>
        </div>
    </div>
</x-layout>
