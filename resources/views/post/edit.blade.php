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

                <form class="space-y-6">
                    <!-- Title Field -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Post Title</label>
                        <input
                            type="text"
                            value="Senior Laravel Developer"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                        />
                    </div>

                    <!-- Description Field -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea
                            rows="6"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                        >
Full job description here...</textarea
                        >
                    </div>

                    <!-- Tags -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tags</label>

                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs font-medium bg-blue-600 text-white rounded-full">
                                Laravel
                            </span>

                            <span class="px-3 py-1 text-xs font-medium bg-green-600 text-white rounded-full">
                                Remote
                            </span>

                            <span
                                class="px-3 py-1 text-xs font-medium bg-gray-200 text-gray-700 rounded-full hover:bg-blue-600 hover:text-white cursor-pointer transition"
                            >
                                + Add Tag
                            </span>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-between items-center pt-6">
                        <!-- Delete -->
                        <button
                            type="button"
                            class="px-5 py-2 rounded-xl bg-red-100 text-red-600 hover:bg-red-600 hover:text-white transition"
                        >
                            Delete Post
                        </button>

                        <div class="flex gap-4">
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
                                Update Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
