<x-layout>

    <body class="bg-gray-50 min-h-screen">
        <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 lg:w-5/6 w-full mx-auto">
                <!-- Left Section -->
                <div
                    class="bg-green-800 sm:mx-auto hidden xl:flex flex-col items-center justify-center sm:w-full h-full space-y-8 p-16 shadow-lg sm:rounded-lg">
                    <img class="mx-auto h-20 w-auto" src="https://admissions.dkut.ac.ke/images/logo.png"
                        alt="Logo" />
                    <h2 class="mt-6 text-center text-4xl font-bold tracking-tight text-white">New Gallery</h2>
                    <p class="mt-4 text-center text-lg text-yellow-400">
                        Share your article with our subscribers.
                    </p>
                </div>

                <!-- Right Section -->
                <div class="bg-white sm:mx-auto sm:w-full py-16 px-12 shadow-lg sm:rounded-lg">
                    <form class="space-y-8" action="{{ route('galleries.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- Gallery Title -->
                        <div>
                            <label for="title" class="block text-lg font-medium text-gray-700">Gallery Title</label>
                            <div class="mt-2 relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-heading text-gray-400 text-lg"></i>
                                </div>
                                <input id="title" name="title" type="text" required
                                    class="block w-full pl-12 rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom text-lg"
                                    placeholder="Enter the gallery title" value="{{ old('title') }}" />
                            </div>
                            @error('title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Send Date -->
                        <div>
                            <label for="send_date" class="block text-lg font-medium text-gray-700">Send Date
                                (Optional)</label>
                            <div class="mt-2 relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-calendar-alt text-gray-400 text-lg"></i>
                                </div>
                                <input id="send_date" name="send_date" type="date"
                                    class="block w-full pl-12 rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom text-lg"
                                    value="{{ old('send_date') }}" />
                            </div>
                            @error('send_date')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Upload Media -->
                        <div>
                            <label for="media" class="block text-lg font-medium text-gray-700">Upload Media</label>
                            <input id="media" name="media" type="file" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom text-lg" />
                            @error('media')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                       

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-4 px-6 border border-transparent rounded-button shadow-lg text-lg font-medium text-white bg-green-800 hover:bg-custom/90 focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-custom">
                                Submit Gallery
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</x-layout>
