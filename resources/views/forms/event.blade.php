<x-layout>

    <body class="bg-gray-50 min-h-screen">
        <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 lg:w-5/6 w-full mx-auto">
                <!-- Left Section -->
                <div
                    class="bg-green-800 sm:mx-auto hidden xl:flex flex-col items-center justify-center sm:w-full h-full space-y-8 p-16 shadow-lg sm:rounded-lg">
                    <img class="mx-auto h-20 w-auto" src="https://admissions.dkut.ac.ke/images/logo.png" alt="Logo" />
                    <h2 class="mt-6 text-center text-4xl font-bold tracking-tight text-white">Submit Event Details</h2>
                    <p class="mt-4 text-center text-lg text-yellow-400">
                        Share your event with our community.
                    </p>
                </div>

                <!-- Right Section -->
                <div class="bg-white sm:mx-auto sm:w-full py-16 px-12 shadow-lg sm:rounded-lg">
                    <form class="space-y-8" action="{{ route('event.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- Event Title -->
                        <div>
                            <label for="name" class="block text-lg font-medium text-gray-700">Event Title</label>
                            <div class="mt-2 relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-calendar text-gray-400 text-lg"></i>
                                </div>
                                <input id="name" name="name" type="text" required
                                    class="block w-full pl-12 rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom text-lg"
                                    placeholder="Enter your event title" />
                            </div>
                        </div>

                        <!-- Event Type -->
                        <div>
                            <label for="type" class="block text-lg font-medium text-gray-700">Event Type</label>
                            <div class="mt-2">
                                <select id="type" name="type" required
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom text-lg">
                                    <option value="" disabled selected>Select an event type</option>
                                    <option value="Workshop">Workshop</option>
                                    <option value="Conference">Conference</option>
                                    <option value="Webinar">Webinar</option>
                                    <option value="Seminar">Seminar</option>
                                    <option value="Networking">Networking</option>
                                </select>
                            </div>
                        </div>

                        <!-- Event Location -->
                        <div>
                            <label for="location" class="block text-lg font-medium text-gray-700">Event Location</label>
                            <input id="location" name="location" type="text" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom text-lg"
                                placeholder="Enter the event location" />
                        </div>

                        <!-- Event Date -->
                        <div>
                            <label for="date" class="block text-lg font-medium text-gray-700">Event Date</label>
                            <input id="date" name="date" type="date" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom text-lg" />
                        </div>

                        <!-- Number of Attendees -->
                        <div>
                            <label for="attendees" class="block text-lg font-medium text-gray-700">Number of
                                Attendees</label>
                            <input id="attendees" name="attendees" type="number" min="0"
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom text-lg"
                                placeholder="Enter the expected number of attendees (optional)" />
                        </div>

                        <!-- Event Thumbnail -->
                        <div>
                            <label for="file-upload" class="block text-lg font-medium text-gray-700">Event
                                Thumbnail</label>
                            <div
                                class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <div class="flex text-lg text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-medium text-green-800 hover:text-green-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-800">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only" />
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-sm text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-4 px-6 border border-transparent rounded-button shadow-lg text-lg font-medium text-white bg-green-800 hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-green-800">
                                Submit Event
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</x-layout>
