<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet" />
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-12 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png"
                alt="Logo" />
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Submit Event Details</h2>
            <p class="mt-2 text-center text-sm text-gray-600">Share your event with our community</p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6" action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <!-- Event Title -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Event Title</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-calendar text-gray-400"></i>
                            </div>
                            <input id="name" name="name" type="text" required
                                class="block w-full pl-10 !rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter your event title" />
                        </div>
                    </div>
                
                    <!-- Event Type -->
                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-700">Event Type</label>
                        <div class="mt-1">
                            <select id="type" name="type" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm">
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
                        <label for="location" class="block text-sm font-medium text-gray-700">Event Location</label>
                        <div class="mt-1">
                            <input id="location" name="location" type="text" required
                                class="block w-full !rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter the event location" />
                        </div>
                    </div>
                
                    <!-- Event Date -->
                    <div>
                        <label for="date" class="block text-sm font-medium text-gray-700">Event Date</label>
                        <div class="mt-1">
                            <input id="date" name="date" type="date" required
                                class="block w-full !rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm" />
                        </div>
                    </div>
                
                    <!-- Number of Attendees -->
                    <div>
                        <label for="attendees" class="block text-sm font-medium text-gray-700">Number of Attendees</label>
                        <div class="mt-1">
                            <input id="attendees" name="attendees" type="number" min="0"
                                class="block w-full !rounded-button border-gray-300 shadow-sm focus:border-custom focus:ring-custom sm:text-sm"
                                placeholder="Enter the expected number of attendees (optional)" />
                        </div>
                    </div>
                
                    <!-- Event Thumbnail -->
                    <div id="thumbnail-section">
                        <label class="block text-sm font-medium text-gray-700">Event Thumbnail</label>
                        <div
                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed !rounded-button">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                    aria-hidden="true">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer !rounded-button bg-white font-medium text-custom hover:text-custom/90 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-custom">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only" />
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent !rounded-button shadow-sm text-sm font-medium text-white bg-custom hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
                            Submit Event
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

</html>
