<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Info Hub</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-green-600.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"></script>
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite('resources/css/app.css')
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#1e40af"
        data-border-radius='small'></script>
</head>

<body class="font-inter  text-green-700">
    <header class="bg-green-800 shadow-sm">
        <nav class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center items-center h-20">
                <div class="flex items-center justify-center bg-green-800">
                    <img src="https://admissions.dkut.ac.ke/images/logo.png" alt="University Logo" class="h-12">
                </div>

            </div>
        </nav>
    </header>
    <div class="relative h-[800px] overflow-hidden">
        <div class="relative h-[800px] overflow-hidden">
            <img src="https://i.pinimg.com/736x/bf/1d/df/bf1ddf5a001515cfeb53f7f02879703e.jpg"
                class="w-full h-[800px] object-cover" alt="Campus Life">
            <div
                class="absolute inset-0 flex justify-center items-center text-white bg-black bg-opacity-50 p-4 opacity-0 hover:opacity-100 transition-opacity duration-500 ease-in-out">
                <h2 class="text-4xl font-bold">Explore Campus Life</h2>
            </div>
        </div>

    </div>
    </div>

    <nav class="sticky top-0 md:py-12 text-white bg-green-800">
        <ul class="flex items-center justify-center gap-6">
            <li class="nav-item font-bold mr-2">
                <a href="{{ url('/') }}">Home</a>
            </li>

            <!-- Academics Dropdown -->
            <li class="relative" x-data="{ open: false }">
                <button class="nav-item font-bold flex items-center group mr-2 cursor-pointer" @click="open = !open">
                    Academics
                </button>
                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="absolute left-0 top-full bg-white border border-gray-200 shadow-md mt-2 py-6 px-8 z-50 w-max">
                    <div class="flex gap-12 text-green-800">
                        <!-- Admission Section -->
                        <div class="text-green-800">
                            <h3 class="font-bold text-green-800 mb-4">Admission</h3>
                            <ul class="space-y-2 text-green-800">
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a
                                        href="https://www.dkut.ac.ke/index.php/academics/admission/application-procedure">Application
                                        Procedure</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a href="https://www.dkut.ac.ke/index.php/academics/admission/application-forms">Application
                                        Forms</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a href="https://admissions.dkut.ac.ke/">Apply Online</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a href="https://www.dkut.ac.ke/index.php/academics/admission/admission-materials">Admission
                                        Materials</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a href="https://registration.dkut.ac.ke/">First Year Registration 2024/2025</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Programmes Section -->
                        <div>
                            <h3 class="font-bold text-green-800 mb-4">Programmes</h3>
                            <ul class="space-y-2">
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a
                                        href="https://www.dkut.ac.ke/index.php/academics/programmes/postgraduate-programmes">Postgraduate
                                        Programmes</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a
                                        href="https://www.dkut.ac.ke/index.php/academics/programmes/undergraduate-programmes">Undergraduate
                                        Programmes</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a
                                        href="https://www.dkut.ac.ke/index.php/academics/programmes/diploma-and-certificate-programmes">Diploma
                                        and Certificate Programmes</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a
                                        href="https://www.dkut.ac.ke/index.php/academics/programmes/professional-and-certification-courses">Professional
                                        and Certification Courses</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Schools & Institutes Section -->
                        <div>
                            <h3 class="font-bold text-green-800 mb-4">
                                <a href="https://www.dkut.ac.ke/index.php/academics/schools-institutes">Schools &
                                    Institutes</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </li>


            <li class="nav-item font-bold mr-2">
                <a href="/exhibits">Gallery</a>
            </li>

            <li class="nav-item font-bold mr-2">
                <a href="/newsletters">Newsletters</a>
            </li>

            <li class="nav-item font-bold mr-2">
                <a href="https://www.dkut.ac.ke/">University Website</a>
            </li>
        </ul>
    </nav>

    <main class="md:9/10 mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">

                {{-- Latest News --}}
                <section class="mb-12 md:p-6 p-3 rounded-xl bg-yellow-300 text-green-800 shadow-xl">
                    <h2 class="text-2xl font-bold mb-6">Latest News</h2>
                    @if ($news->isNotEmpty())
                        <div class="grid gap-6">
                            @foreach ($news as $item)
                                <article class="p-6 border-b border-green-800 shadow-sm">
                                    <time
                                        class="text-sm">{{ \Carbon\Carbon::parse($item->published_at)->format('F d, Y') }}</time>
                                    <h3 class="mt-2 text-xl font-semibold">{{ $item->title }}</h3>
                                    <p class="mt-3">{{ $item->content }}</p>
                                </article>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-600">No news available.</p>
                    @endif
                </section>
                {{-- Campus Gallery --}}
                <section>
                    <h2 class="text-2xl font-bold mb-6">Campus Gallery</h2>
                    @if ($galleries->isNotEmpty())
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach ($galleries as $gallery)
                                <div
                                    class="bg-white shadow-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 ease-in-out">
                                    <img src="{{ $gallery->media_url }}" alt="{{ $gallery->title }}"
                                        class="w-full h-48 object-cover rounded-lg">
                                    <div class="p-2">
                                        <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ $gallery->title }}</h3>
                                        <a href="{{ route('exhibits.show', $gallery->id) }}"
                                            class="text-green-600 hover:text-opacity-90 py-1 px-2 inline-block border-b-2 border-transparent hover:border-green-600 text-sm font-medium">
                                            More Photos
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-gray-600">No galleries found</p>
                    @endif
                </section>

            </div>

            <div class="lg:col-span-1">

                {{-- upcoming events --}}
                <section class="bg-green-800 text-white p-6 rounded-lg shadow-xl mb-8">
                    <h2 class="text-xl font-bold mb-4">Upcoming Events</h2>
                    <div class="space-y-4">
                        @if ($events->isEmpty())
                            <p>No upcoming events at the moment.</p>
                        @else
                            @foreach ($events->sortByDesc('date')->take(4) as $event)
                                <div class="border-l-4 border-green-600 pl-4">
                                    <time class="text-sm">
                                        {{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}
                                    </time>
                                    <h3 class="font-medium">{{ $event->name }}</h3>
                                    <p class="text-sm">
                                        {{ \Carbon\Carbon::parse($event->date)->format('g:i A') }} -
                                        {{ \Carbon\Carbon::parse($event->end_time ?? $event->date)->format('g:i A') }}
                                        |
                                        {{ $event->location ?? 'Location not specified' }}
                                    </p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </section>

                {{-- Important Notices --}}
                <section class="bg-yellow-300 text-green-800 p-6 rounded-lg shadow-xl mb-8">
                    <h2 class="text-xl font-bold text-green-900 mb-4">Important Notices</h2>
                    @if ($notices->isNotEmpty())
                        <div class="space-y-4">
                            @foreach ($notices as $notice)
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-info-circle mt-1"></i>
                                    <div>
                                        <h3 class="font-medium">{{ $notice->title }}</h3>
                                        <p class="text-sm">{{ $notice->content }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="">No notices available.</p>
                    @endif
                </section>
                {{-- Contact Information --}}
                <section class="bg-gray-50 p-6 rounded-lg shadow-xl">
                    <h2 class="text-xl font-bold text-green-900 mb-4">Contact Information</h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-green-600 mt-1"></i>
                            <p class="text-gray-600">
                                123 University Avenue<br>Cityville, ST 12345
                            </p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-phone text-green-600 mt-1"></i>
                            <p class="text-gray-600">(555) 123-4567</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-envelope text-green-600 mt-1"></i>
                            <p class="text-gray-600">info@university.edu</p>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </main>

    {{-- footer --}}
    <footer class="bg-green-900 text-white mt-12">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-green-600">About Us</a></li>
                        <li><a href="#" class="hover:text-green-600">Academics</a></li>
                        <li><a href="#" class="hover:text-green-600">Admissions</a></li>
                        <li><a href="#" class="hover:text-green-600">Research</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-green-600">Library</a></li>
                        <li><a href="#" class="hover:text-green-600">Career Services</a></li>
                        <li><a href="#" class="hover:text-green-600">IT Support</a></li>
                        <li><a href="#" class="hover:text-green-600">Campus Safety</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Student Life</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-green-600">Housing</a></li>
                        <li><a href="#" class="hover:text-green-600">Athletics</a></li>
                        <li><a href="#" class="hover:text-green-600">Student Organizations</a></li>
                        <li><a href="#" class="hover:text-green-600">Events</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-green-600"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-green-600"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-green-600"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-green-600"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-sm text-gray-400">&copy; 2024 DeKUT. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/glide.min.js"></script>

    <script>
        new Glide('.glide', {
            type: 'carousel',
            perView: 1, // Number of slides visible at once
            autoplay: 3000, // Slide changes every 3 seconds
            hoverpause: true, // Pause autoplay when the user hovers over the slider
            animationDuration: 800, // Transition duration (in milliseconds)
        }).mount();
    </script>

</body>
@vite('resources/js/app.js')

</html>
