<x-layout title="Tag Page">
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">All Tags</h1>
            <!-- Card -->
            @foreach ($tags as $tag)
                <span class="inline-block px-3 py-1 text-xs font-medium bg-blue-100 text-blue-700 rounded-full">
                    {{ $tag->title }}
                </span>
            @endforeach
        </div>
    </div>
</x-layout>
