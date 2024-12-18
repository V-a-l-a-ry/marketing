<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Gallery</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"></script>
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gray-50 font-[Poppins]">
    <header class="bg-white shadow-sm">
        <nav class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-12 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png"
                            alt="University Logo">
                    </div>
                    <div class="hidden sm:ml-8 sm:flex sm:space-x-8">
                        <a href="#"
                            class="border-b-2 border-custom text-custom px-1 inline-flex items-center h-full text-sm font-medium">Gallery</a>
                        <a href="#"
                            class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 px-1 inline-flex items-center h-full text-sm font-medium">Events</a>
                        <a href="#"
                            class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 px-1 inline-flex items-center h-full text-sm font-medium">Collections</a>
                        <a href="#"
                            class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 px-1 inline-flex items-center h-full text-sm font-medium">Achievements</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="relative">
                            <input type="text"
                                class="w-64 pl-10 pr-4 py-2 border border-gray-300 !rounded-button text-sm"
                                placeholder="Search gallery...">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="glide mb-12">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="relative h-[500px]">
                            <img src="https://creatie.ai/ai/api/search-image?query=A prestigious university graduation ceremony with students in caps and gowns, celebrating their achievements against a backdrop of historic university architecture. The scene is filled with joy and pride, capturing the essence of academic success.&width=1280&height=500&orientation=landscape&flag=6ace7a97-f846-4db2-9ab6-fc3fe9dab608"
                                class="w-full h-full object-cover" alt="Graduation Ceremony">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-8">
                                <h2 class="text-white text-3xl font-bold mb-2">Spring Graduation Ceremony 2024</h2>
                                <p class="text-white text-lg">Celebrating the achievements of over 2,000 graduates</p>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="relative h-[500px]">
                            <img src="https://creatie.ai/ai/api/search-image?query=A modern art exhibition in a spacious gallery with contemporary installations and artwork displayed on white walls. The space is well-lit and features various mediums of art, from paintings to sculptures.&width=1280&height=500&orientation=landscape&flag=9c7be502-f8f1-411c-9b00-c4762133172e"
                                class="w-full h-full object-cover" alt="Art Exhibition">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-8">
                                <h2 class="text-white text-3xl font-bold mb-2">Annual Art Exhibition</h2>
                                <p class="text-white text-lg">Showcasing student and faculty artistic excellence</p>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="relative h-[500px]">
                            <img src="https://creatie.ai/ai/api/search-image?query=A cutting-edge research laboratory with scientists working on advanced equipment. The scene shows collaboration and innovation, with modern technology and scientific instruments in the background.&width=1280&height=500&orientation=landscape&flag=666b370e-d98f-482a-8852-cacc2389da65"
                                class="w-full h-full object-cover" alt="Research Achievement">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-8">
                                <h2 class="text-white text-3xl font-bold mb-2">Breakthrough Research Achievement</h2>
                                <p class="text-white text-lg">Revolutionary findings in quantum computing research</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
            </div>
        </div>

        <div class="flex mb-8">
            <div class="w-64 pr-8">
                <h3 class="text-lg font-semibold mb-4">Filters</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Date Range</label>
                        <input type="date" class="w-full border border-gray-300 !rounded-button px-3 py-2 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Department</label>
                        <select class="w-full border border-gray-300 !rounded-button px-3 py-2 text-sm">
                            <option>All Departments</option>
                            <option>Arts & Design</option>
                            <option>Sciences</option>
                            <option>Engineering</option>
                            <option>Humanities</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <select class="w-full border border-gray-300 !rounded-button px-3 py-2 text-sm">
                            <option>All Categories</option>
                            <option>Events</option>
                            <option>Art Collections</option>
                            <option>Academic Achievements</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Sort By</label>
                        <select class="w-full border border-gray-300 !rounded-button px-3 py-2 text-sm">
                            <option>Most Recent</option>
                            <option>Most Popular</option>
                            <option>Alphabetical</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="grid grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <img src="https://creatie.ai/ai/api/search-image?query=A vibrant student art exhibition showcasing colorful paintings and sculptures in a well-lit gallery space. The artwork is professionally displayed on clean white walls with proper lighting.&width=400&height=300&orientation=landscape&flag=b7358915-d2c9-480e-936a-4b188dfe048a"
                            class="w-full h-48 object-cover" alt="Student Art Exhibition">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Student Art Exhibition</h3>
                            <p class="text-sm text-gray-600 mb-2">Fine Arts Department</p>
                            <p class="text-sm text-gray-500">March 15, 2024</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <img src="https://creatie.ai/ai/api/search-image?query=A formal academic conference with professors and researchers presenting their findings. The scene shows a professional presentation setup with projected slides and an engaged audience.&width=400&height=300&orientation=landscape&flag=eaa9c400-1263-4380-9a29-41b77a6b98be"
                            class="w-full h-48 object-cover" alt="Academic Conference">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Research Symposium</h3>
                            <p class="text-sm text-gray-600 mb-2">Science Department</p>
                            <p class="text-sm text-gray-500">March 10, 2024</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <img src="https://creatie.ai/ai/api/search-image?query=A cultural performance featuring traditional dancers in colorful costumes on a professional stage. The lighting and staging create a dramatic atmosphere for the cultural celebration.&width=400&height=300&orientation=landscape&flag=a2ae6c99-4f6b-4fff-ac33-76426c354e9f"
                            class="w-full h-48 object-cover" alt="Cultural Performance">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Cultural Festival</h3>
                            <p class="text-sm text-gray-600 mb-2">Cultural Studies</p>
                            <p class="text-sm text-gray-500">March 5, 2024</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <img src="https://creatie.ai/ai/api/search-image?query=An engineering showcase featuring student-built robots and technical projects. The display includes modern technology and innovative designs in a professional exhibition space.&width=400&height=300&orientation=landscape&flag=fc136187-66cc-4ff4-a727-6ed372bd5bee"
                            class="w-full h-48 object-cover" alt="Engineering Showcase">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Engineering Exhibition</h3>
                            <p class="text-sm text-gray-600 mb-2">Engineering Department</p>
                            <p class="text-sm text-gray-500">March 1, 2024</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <img src="https://creatie.ai/ai/api/search-image?query=A literary event with authors and poets sharing their work in an intimate auditorium setting. The atmosphere is intellectual and engaging with proper stage setup.&width=400&height=300&orientation=landscape&flag=282a5ea9-0886-4cf9-ae60-6f5dee0a703d"
                            class="w-full h-48 object-cover" alt="Literary Event">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Literary Festival</h3>
                            <p class="text-sm text-gray-600 mb-2">Literature Department</p>
                            <p class="text-sm text-gray-500">February 25, 2024</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <img src="https://creatie.ai/ai/api/search-image?query=A sports championship celebration with athletes and trophies. The scene captures the excitement of victory with university branding and team spirit on display.&width=400&height=300&orientation=landscape&flag=b0b918d3-6632-4fef-b9b5-f13a406f2616"
                            class="w-full h-48 object-cover" alt="Sports Achievement">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Sports Championship</h3>
                            <p class="text-sm text-gray-600 mb-2">Athletics Department</p>
                            <p class="text-sm text-gray-500">February 20, 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-900 text-white">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Information</h3>
                    <p class="text-gray-400 mb-2">Media Department</p>
                    <p class="text-gray-400 mb-2">Email: media@university.edu</p>
                    <p class="text-gray-400">Phone: (555) 123-4567</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Submission Guidelines</h3>
                    <ul class="text-gray-400 space-y-2">
                        <li>High-resolution images only (min. 2000px)</li>
                        <li>Include detailed event information</li>
                        <li>Submit at least 48 hours before event</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="text-gray-400 space-y-2">
                        <li><a href="#" class="hover:text-white">Gallery Archive</a></li>
                        <li><a href="#" class="hover:text-white">Submit Content</a></li>
                        <li><a href="#" class="hover:text-white">Usage Rights</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 University Gallery. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        new Glide('.glide', {
            type: 'carousel',
            autoplay: 5000,
            animationDuration: 800,
            gap: 0,
            perView: 1
        }).mount();
    </script>
</body>

</html>
