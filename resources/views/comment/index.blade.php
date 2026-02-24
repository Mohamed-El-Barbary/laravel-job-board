<x-layout title="Comments Page">
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">All Comments</h1>
            <!-- Card -->
            @foreach ($comments as $comment)
                <div
                    class="bg-white rounded-2xl shadow-md p-6 mb-6 hover:shadow-xl hover:-translate-y-1 transition duration-300"
                >
                    <span class="text-xs text-gray-500">{{ $comment->author }}</span>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        {{ $comment->content }}
                    </p>

                    <button
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition"
                    >
                        View Details
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
