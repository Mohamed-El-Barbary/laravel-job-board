<x-layout title="Edit Tag">
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="max-w-xl mx-auto px-6">
            <div class="bg-white shadow-lg rounded-2xl p-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Edit Tag</h2>

                    <span class="px-3 py-1 text-xs font-medium bg-blue-100 text-blue-700 rounded-full">Active</span>
                </div>

                <form class="space-y-6">
                    <!-- Tag Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tag Name</label>
                        <input
                            type="text"
                            value="Remote"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                        />
                    </div>

                    <!-- Slug -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                        <input
                            type="text"
                            value="remote"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                        />
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea
                            rows="3"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                        >
Jobs that allow working remotely.</textarea
                        >
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-between items-center pt-4">
                        <!-- Delete -->
                        <button
                            type="button"
                            class="px-5 py-2 rounded-xl bg-red-100 text-red-600 hover:bg-red-600 hover:text-white transition"
                        >
                            Delete
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
                                Update Tag
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
