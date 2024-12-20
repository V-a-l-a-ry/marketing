<x-layout>

    <body class="bg-gray-50 min-h-screen">
        <div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <img class="mx-auto h-12 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png"
                    alt="Logo" />
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Submit Newsletter Article
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">Share your article with our subscribers</p>
            </div>

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form class="space-y-6" action="{{ route('newsletters.store') }}" method="POST">
                        @csrf

                        <!-- Newsletter Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Newsletter
                                Title</label>
                            <div class="mt-1 relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-heading text-gray-400"></i>
                                </div>
                                <input id="title" name="title" type="text" required
                                    class="block w-full pl-10 rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                    placeholder="Enter the newsletter title" value="{{ old('title') }}" />
                            </div>
                            @error('title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="category_id" name="category_id" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm">
                                <option value="" disabled selected>Select a category</option>
                                <option value="1" {{ old('category_id') == 1 ? 'selected' : '' }}>Luminaries
                                </option>
                                <option value="2" {{ old('category_id') == 2 ? 'selected' : '' }}>Mentorships
                                </option>
                                <option value="3" {{ old('category_id') == 3 ? 'selected' : '' }}>Events</option>
                                <option value="4" {{ old('category_id') == 4 ? 'selected' : '' }}>News</option>
                            </select>
                            @error('category_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea id="content" name="content" rows="5" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Write your newsletter content here...">{{ old('content') }}</textarea>
                            @error('content')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Send Date -->
                        <div>
                            <label for="send_date" class="block text-sm font-medium text-gray-700">Send Date
                                (Optional)</label>
                            <div class="mt-1 relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-calendar-alt text-gray-400"></i>
                                </div>
                                <input id="send_date" name="send_date" type="date"
                                    class="block w-full pl-10 rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                    value="{{ old('send_date') }}" />
                            </div>
                            @error('send_date')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Opens -->
                        <div>
                            <label for="opens" class="block text-sm font-medium text-gray-700">Opens
                                (Optional)</label>
                            <input id="opens" name="opens" type="number" min="0"
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter the number of opens" value="{{ old('opens') }}" />
                            @error('opens')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-custom hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
                                Submit Newsletter
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-8 text-center text-sm text-gray-600">
                <p>By submitting, you agree to our </p>
            </div>

            <footer class="mt-8 text-center text-xs text-gray-500">
                <p>© 2024 Your Company. All rights reserved.</p>
                <p class="mt-1">Version 1.0.0 | Compatible with Chrome, Firefox, Safari</p>
            </footer>
        </div>
    </body>

</x-layout>
