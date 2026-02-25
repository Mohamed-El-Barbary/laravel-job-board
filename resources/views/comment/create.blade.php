<x-layout title="Create Comment">
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="max-w-2xl mx-auto px-6">
            <div class="bg-white shadow-lg rounded-2xl p-8">
                <!-- Title -->
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Add a Comment</h2>

                <form class="space-y-6">
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                        <input
                            type="text"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                            placeholder="Enter your name" />
                    </div>

                    <!-- Comment -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Comment</label>
                        <textarea
                            rows="4"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                            placeholder="Write your comment..."></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end gap-4 pt-4">
                        <button
                            type="button"
                            class="px-5 py-2 rounded-xl border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                            Cancel
                        </button>

                        <button
                            type="submit"
                            class="px-6 py-2 rounded-xl bg-blue-600 text-white font-medium hover:bg-blue-700 transition shadow-md">
                            Post Comment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>