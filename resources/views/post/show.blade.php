<x-layout title="{{ $post->title }}">
    <div class="max-w-4xl mx-auto mt-10">

    <div class="bg-white shadow-lg rounded-xl p-8 border">

        <span class="text-xs text-gray-500">{{ $post->author }}</span>

        <h1 class="text-3xl font-bold mb-4">
            {{ $post->title }}
        </h1>

        <p class="text-gray-700 mb-6">
            {{ $post->body }}
        </p>

        <div class="text-sm text-gray-500">
            Posted at: {{ $post->created_at->format('Y-m-d') }}
        </div>

        <h2 class="text-2xl font-semibold mt-8 mb-4">
            Comments
        </h2>

        @foreach ($post->comments as $comment )
            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                <span class="text-xs text-gray-500">{{ $comment->author }}</span>
                <p class="text-gray-600 mt-2">
                    {{ $comment->content }}
                </p>
                <button class="px-3 py-1 bg-blue-500 text-white rounded-lg text-sm font-medium hover:bg-blue-600 transition mt-2">
                    <a href="/comments/{{ $comment->id }}"> View Comment Details</a>
                </button>
            </div>
        @endforeach
        
    </div>

    <button class="mt-4">
        <a href="/blog" class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition">
            Back to Posts
        </a>
    </button>

</div>
</x-layout>