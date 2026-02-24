<x-layout title="Create Tag">
<div class="min-h-screen bg-gray-100 py-12">
    <div class="max-w-xl mx-auto px-6">

        <div class="bg-white shadow-lg rounded-2xl p-8">

            <!-- Title -->
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                Create New Tag
            </h2>

            <form class="space-y-6">

                <!-- Tag Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Tag Name
                    </label>
                    <input type="text"
                           placeholder="e.g. Remote, Full-Time, Laravel"
                           class="w-full px-4 py-3 rounded-xl border border-gray-300
                                  focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500
                                  outline-none transition">
                </div>

                <!-- Slug -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Slug
                    </label>
                    <input type="text"
                           placeholder="remote"
                           class="w-full px-4 py-3 rounded-xl border border-gray-300
                                  focus:ring-2 focus:ring-blue-500
                                  focus:border-blue-500
                                  outline-none transition">
                </div>

                <!-- Description (Optional) -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Description (Optional)
                    </label>
                    <textarea rows="3"
                              placeholder="Short description about this tag..."
                              class="w-full px-4 py-3 rounded-xl border border-gray-300
                                     focus:ring-2 focus:ring-blue-500
                                     focus:border-blue-500
                                     outline-none transition"></textarea>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-4 pt-4">

                    <button type="button"
                            class="px-5 py-2 rounded-xl border border-gray-300
                                   text-gray-600 hover:bg-gray-100 transition">
                        Cancel
                    </button>

                    <button type="submit"
                            class="px-6 py-2 rounded-xl bg-blue-600 text-white
                                   font-medium hover:bg-blue-700
                                   transition shadow-md">
                        Create Tag
                    </button>

                </div>

            </form>

        </div>

    </div>
</div>
</x-layout>