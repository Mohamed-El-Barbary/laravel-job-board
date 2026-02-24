<x-layout title="Edit Comment">
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="max-w-2xl mx-auto px-6">
            <div class="bg-white shadow-lg rounded-2xl p-8">
                <!-- Header -->
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Edit Comment</h2>

                    <span class="px-3 py-1 text-xs font-medium bg-yellow-100 text-yellow-700 rounded-full">Edited</span>
                </div>

                <form class="space-y-6">
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                        <input
                            type="text"
                            value="Mohamed"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                        />
                    </div>

                    <!-- Comment -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Comment</label>
                        <textarea
                            rows="4"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                        >
Updated comment text here...</textarea
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
                                Update Comment
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
