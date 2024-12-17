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
                    <form class="space-y-6" action="{{ route('galleries.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- Gallery Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Gallery Title</label>
                            <input id="title" name="title" type="text" required value="{{ old('title') }}"
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter the gallery title" />
                            @error('title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>



                        <!-- Send Date -->
                        <div>
                            <label for="send_date" class="block text-sm font-medium text-gray-700">Send Date
                                (Optional)</label>
                            <input id="send_date" name="send_date" type="date" value="{{ old('send_date') }}"
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm" />
                            @error('send_date')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Upload Media -->
                        <div>
                            <label for="media" class="block text-sm font-medium text-gray-700">Upload Media</label>
                            <input id="media" name="media" type="file" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm" />
                            @error('media')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Opens -->
                        <div>
                            <label for="opens" class="block text-sm font-medium text-gray-700">Opens
                                (Optional)</label>
                            <input id="opens" name="opens" type="number" min="0"
                                value="{{ old('opens', 0) }}" placeholder="Enter number of opens"
                                class="block w-full mt-1 p-2 border border-gray-300 rounded-md" />
                            @error('opens')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-custom hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
                                Submit Gallery
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
