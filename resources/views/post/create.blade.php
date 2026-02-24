<x-layout title="Create New Post">
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="max-w-3xl mx-auto px-6">
            <!-- Card -->
            <div class="bg-white shadow-xl rounded-2xl p-8">
                <!-- Title -->
                <h1 class="text-3xl font-bold text-gray-800 mb-8">Create New Post</h1>

                <form class="space-y-6">
                    <!-- Title + Author (Same Line) -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Post Title -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Post Title</label>
                            <input
                                type="text"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                placeholder="Enter post title"
                            />
                        </div>

                        <!-- Author -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Author</label>
                            <input
                                type="text"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                placeholder="Enter author name"
                            />
                        </div>
                    </div>

                    <!-- Content -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                        <textarea
                            rows="6"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                            placeholder="Write post content..."
                        ></textarea>
                    </div>

                    <!-- Published Toggle -->
                    <div class="flex items-center justify-between bg-gray-50 px-4 py-3 rounded-xl border">
                        <div>
                            <p class="text-sm font-medium text-gray-700">Publish Post</p>
                            <p class="text-xs text-gray-500">Make this post visible to everyone</p>
                        </div>

                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" />
                            <div
                                class="w-11 h-6 bg-gray-300 rounded-full peer peer-checked:bg-blue-600 transition"
                            ></div>
                            <div
                                class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition peer-checked:translate-x-5"
                            ></div>
                        </label>
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
                            Cancel
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
