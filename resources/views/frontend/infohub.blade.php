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
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"></script>
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#1e40af"
        data-border-radius='small'></script>
</head>

<body class="font-inter bg-gray-50">
    <header class="bg-white shadow-sm">
        <nav class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="University Logo"
                        class="h-12">
                    <div class="hidden md:flex space-x-8 ml-10">
                        <a href="#"
                            class="text-custom hover:text-custom/80 px-3 py-2 text-sm font-medium">Home</a>
                        <a href="#"
                            class="text-gray-700 hover:text-custom px-3 py-2 text-sm font-medium">Academics</a>
                        <a href="#"
                            class="text-gray-700 hover:text-custom px-3 py-2 text-sm font-medium">Research</a>
                        <a href="#" class="text-gray-700 hover:text-custom px-3 py-2 text-sm font-medium">Campus
                            Life</a> <a href="#"
                            class="text-gray-700 hover:text-custom px-3 py-2 text-sm font-medium">About</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="relative">
                        <input type="text" placeholder="Search..."
                            class="w-64 pl-10 pr-4 py-2 border border-gray-300 !rounded-button focus:outline-none focus:ring-2 focus:ring-custom focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="glide relative h-[500px] overflow-hidden">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide">
                    <img src="https://creatie.ai/ai/api/search-image?query=A modern university campus with stunning architecture, students walking on pathways, surrounded by lush green landscapes and academic buildings. The scene is captured during golden hour with warm lighting, creating an inspiring and welcoming atmosphere for education and learning.&width=1440&height=500&orientation=landscape&flag=2ba91015-5039-4249-b01e-deccd1c5b17e"
                        class="w-full h-[500px] object-cover" alt="Campus Life">
                </li>
                <li class="glide__slide">
                    <img src="https://creatie.ai/ai/api/search-image?query=Students collaborating in a modern library setting with floor-to-ceiling windows, contemporary furniture, and advanced technology. Natural light floods the space, highlighting diverse groups of students engaged in research and discussion.&width=1440&height=500&orientation=landscape&flag=9a03762b-31c0-45dd-8664-cd63828d1000"
                        class="w-full h-[500px] object-cover" alt="Library">
                </li>
                <li class="glide__slide">
                    <img src="https://creatie.ai/ai/api/search-image?query=A vibrant graduation ceremony with students in caps and gowns celebrating their achievement. The scene captures the joy and pride of the moment with confetti in the air and a beautiful campus backdrop.&width=1440&height=500&orientation=landscape&flag=f705b7a8-a48a-4659-b3c7-da8095b53080"
                        class="w-full h-[500px] object-cover" alt="Graduation">
                </li>
            </ul>
        </div>
        <div class="glide__bullets absolute bottom-4 left-1/2 transform -translate-x-1/2 z-10"
            data-glide-el="controls[nav]"> <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
        </div>
    </div>

    <div class="bg-white py-6 shadow-sm">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center space-x-4"> <a href="#"
                    class="flex items-center space-x-2 text-custom hover:text-custom/80">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Admissions</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-custom hover:text-custom/80"> <i
                        class="fas fa-book"></i>
                    <span>Library</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-custom hover:text-custom/80"> <i
                        class="fas fa-user-graduate"></i>
                    <span>Student Portal</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-custom hover:text-custom/80"> <i
                        class="fas fa-calendar-alt"></i>
                    <span>Academic Calendar</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-custom hover:text-custom/80"> <i
                        class="fas fa-newspaper"></i>
                    <span>News & Events</span>
                </a>
            </div>
        </div>
    </div>

    <main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Latest News</h2>
                    <div class="grid gap-6">
                        <article class="bg-white p-6 rounded-lg shadow-sm"> <time class="text-sm text-gray-500">March
                                15, 2024</time>
                            <h3 class="mt-2 text-xl font-semibold text-gray-900">University Receives Major Research
                                Grant</h3>
                            <p class="mt-3 text-gray-600">The Department of Science has been awarded a $2.5 million
                                grant for innovative research in sustainable energy solutions.</p>
                        </article>
                        <article class="bg-white p-6 rounded-lg shadow-sm">
                            <time class="text-sm text-gray-500">March 12, 2024</time>
                            <h3 class="mt-2 text-xl font-semibold text-gray-900">New International Partnership Announced
                            </h3>
                            <p class="mt-3 text-gray-600">Our university has established a new partnership with leading
                                institutions in Europe for student exchange programs.</p>
                        </article>
                        <article class="bg-white p-6 rounded-lg shadow-sm">
                            <time class="text-sm text-gray-500">March 10, 2024</time>
                            <h3 class="mt-2 text-xl font-semibold text-gray-900">Campus Sustainability Initiative Launch
                            </h3>
                            <p class="mt-3 text-gray-600">New campus-wide sustainability program aims to achieve carbon
                                neutrality by 2030.</p>
                        </article>
                    </div>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Campus Gallery</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <img src="https://creatie.ai/ai/api/search-image?query=A modern university lecture hall with state-of-the-art technology and amphitheater seating, featuring clean lines and contemporary design elements against a neutral background.&width=400&height=300&orientation=landscape&flag=b0126eee-50d9-48aa-902d-ccc012c2a627"
                            class="w-full h-48 object-cover rounded-lg" alt="Lecture Hall"> <img
                            src="https://creatie.ai/ai/api/search-image?query=A cutting-edge research laboratory with advanced scientific equipment, researchers in white coats working on experiments, clean and organized workspace against a minimal background.&width=400&height=300&orientation=landscape&flag=2742118a-a0dd-4ab7-bbec-1ef13d4c90d9"
                            class="w-full h-48 object-cover rounded-lg" alt="Research Lab"> <img
                            src="https://creatie.ai/ai/api/search-image?query=A modern student commons area with collaborative spaces, contemporary furniture, and large windows providing natural light, showing students engaged in group work against a simple background.&width=400&height=300&orientation=landscape&flag=65b28611-e8f1-445f-a96a-44b6fd23466f"
                            class="w-full h-48 object-cover rounded-lg" alt="Student Commons"> <img
                            src="https://creatie.ai/ai/api/search-image?query=An athletic facility featuring modern exercise equipment and training areas, with students engaging in fitness activities against a clean background.&width=400&height=300&orientation=landscape&flag=ffc22f36-b376-4dd6-be47-1912546f1fed"
                            class="w-full h-48 object-cover rounded-lg" alt="Athletic Facility"> <img
                            src="https://creatie.ai/ai/api/search-image?query=A peaceful university garden with walking paths, benches, and seasonal flowers, creating a serene study environment against a natural background.&width=400&height=300&orientation=landscape&flag=0d2d6c3c-7916-46b4-a7c1-bfa2d8ce428c"
                            class="w-full h-48 object-cover rounded-lg" alt="Campus Garden"> <img
                            src="https://creatie.ai/ai/api/search-image?query=A modern dormitory building exterior with contemporary architecture, featuring student living spaces and common areas against a simple sky background.&width=400&height=300&orientation=landscape&flag=e9baa939-122e-46fc-965f-27b98a594ec5"
                            class="w-full h-48 object-cover rounded-lg" alt="Student Housing">
                    </div>
                </section>
            </div>

            <div class="lg:col-span-1">
                <section class="bg-white p-6 rounded-lg shadow-sm mb-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Upcoming Events</h2>
                    <div class="space-y-4">
                        <div class="border-l-4 border-custom pl-4">
                            <time class="text-sm text-gray-500">March 20, 2024</time>
                            <h3 class="font-medium text-gray-900">Spring Career Fair</h3>
                            <p class="text-sm text-gray-600">10:00 AM - 4:00 PM | Student Center</p>
                        </div>
                        <div class="border-l-4 border-custom pl-4"> <time class="text-sm text-gray-500">March 25,
                                2024</time>
                            <h3 class="font-medium text-gray-900">Research Symposium</h3>
                            <p class="text-sm text-gray-600">9:00 AM - 5:00 PM | Science Building</p>
                        </div>
                        <div class="border-l-4 border-custom pl-4">
                            <time class="text-sm text-gray-500">April 1, 2024</time>
                            <h3 class="font-medium text-gray-900">Alumni Networking Event</h3>
                            <p class="text-sm text-gray-600">6:00 PM - 8:00 PM | Grand Hall</p>
                        </div>
                    </div>
                </section>

                <section class="bg-white p-6 rounded-lg shadow-sm mb-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Important Notices</h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-exclamation-circle text-custom mt-1"></i>
                            <div>
                                <h3 class="font-medium text-gray-900">Fall 2024 Registration</h3>
                                <p class="text-sm text-gray-600">Registration opens April 15. Check your portal for
                                    specific time slots.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3"> <i class="fas fa-info-circle text-custom mt-1"></i>
                            <div>
                                <h3 class="font-medium text-gray-900">Library Hours Update</h3>
                                <p class="text-sm text-gray-600">Extended hours during finals week starting April 20.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-white p-6 rounded-lg shadow-sm">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Contact Information</h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-custom mt-1"></i>
                            <p class="text-gray-600">123 University Avenue<br>Cityville, ST 12345</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-phone text-custom mt-1"></i>
                            <p class="text-gray-600">(555) 123-4567</p>
                        </div>
                        <div class="flex items-start space-x-3"> <i class="fas fa-envelope text-custom mt-1"></i>
                            <p class="text-gray-600">info@university.edu</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="mt-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Campus Location</h2>
            <div class="w-full h-[400px] rounded-lg overflow-hidden">
                <div class="w-full h-full bg-center bg-cover"
                    style="background-image: url('https://ai-public.creatie.ai/gen_page/map_placeholder_1280x720.png')">
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white mt-12">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-custom">About Us</a></li>
                        <li><a href="#" class="hover:text-custom">Academics</a></li>
                        <li><a href="#" class="hover:text-custom">Admissions</a></li>
                        <li><a href="#" class="hover:text-custom">Research</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-custom">Library</a></li>
                        <li><a href="#" class="hover:text-custom">Career Services</a></li>
                        <li><a href="#" class="hover:text-custom">IT Support</a></li>
                        <li><a href="#" class="hover:text-custom">Campus Safety</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Student Life</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-custom">Housing</a></li>
                        <li><a href="#" class="hover:text-custom">Athletics</a></li>
                        <li><a href="#" class="hover:text-custom">Student Organizations</a></li>
                        <li><a href="#" class="hover:text-custom">Events</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-custom"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-custom"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-custom"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-custom"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-sm text-gray-400">&copy; 2024 University Name. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        new Glide('.glide', {
            type: 'carousel',
            autoplay: 5000,
            hoverpause: true,
            gap: 0,
            animationDuration: 1000
        }).mount();
    </script>
</body>

</html>
