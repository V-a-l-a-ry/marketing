<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Daily Pulse - Digital Magazine</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gray-50 font-[Inter]">
    <header class="border-b border-gray-200 bg-white">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="The Daily Pulse"
                        class="h-8">
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-custom hover:text-custom/80 font-medium">News</a>
                    <a href="#" class="text-gray-600 hover:text-custom font-medium">Technology</a>
                    <a href="#" class="text-gray-600 hover:text-custom font-medium">Lifestyle</a>
                    <a href="#" class="text-gray-600 hover:text-custom font-medium">Culture</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="search" placeholder="Search articles..."
                            class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-custom focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                    <button class="!rounded-button bg-custom text-white px-4 py-2 hover:bg-custom/90">Sign In</button>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <section class="mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <span class="text-custom font-semibold">Featured Story</span>
                    <h1 class="mt-2 text-4xl font-[Playfair Display] font-bold leading-tight">The Future of AI:
                        Transforming Our Daily Lives</h1>
                    <p class="mt-4 text-gray-600 text-lg">Discover how artificial intelligence is revolutionizing
                        everything from healthcare to transportation, and what it means for our future.</p>
                    <button class="!rounded-button mt-6 bg-custom text-white px-6 py-3 hover:bg-custom/90">Read
                        More</button>
                </div>
                <div>
                    <img src="https://creatie.ai/ai/api/search-image?query=A 3D vector-style image showcasing futuristic AI technology interface with holographic displays and neural network visualization, clean modern design with a soft blue background&width=600&height=400&orientation=landscape&removebg=true&flag=6cb766d2-4572-4e67-a5cc-345714b87ca6"
                        alt="AI Future" class="rounded-lg shadow-lg">
                </div>
            </div>
        </section>

        <section class="mb-16">
            <div class="flex space-x-4 overflow-x-auto pb-4">
                <button class="!rounded-button bg-custom text-white px-4 py-2 whitespace-nowrap">All Topics</button>
                <button
                    class="!rounded-button bg-gray-100 text-gray-700 px-4 py-2 whitespace-nowrap hover:bg-gray-200">Technology</button>
                <button
                    class="!rounded-button bg-gray-100 text-gray-700 px-4 py-2 whitespace-nowrap hover:bg-gray-200">Business</button>
                <button
                    class="!rounded-button bg-gray-100 text-gray-700 px-4 py-2 whitespace-nowrap hover:bg-gray-200">Science</button>
                <button
                    class="!rounded-button bg-gray-100 text-gray-700 px-4 py-2 whitespace-nowrap hover:bg-gray-200">Health</button>
            </div>
        </section>

        <section class="mb-16 bg-white p-8 rounded-lg border border-gray-200">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-3xl font-[Playfair Display] font-bold">Subscribe to Our Newsletter</h2>
                <p class="mt-4 text-gray-600">Get the latest stories, insights and analysis delivered straight to your
                    inbox.</p>
                <form class="mt-6 flex gap-4">
                    <input type="email" placeholder="Enter your email"
                        class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-custom focus:border-transparent">
                    <button type="submit"
                        class="!rounded-button bg-custom text-white px-6 py-3 hover:bg-custom/90">Subscribe</button>
                </form>
            </div>
        </section>

        <section class="mb-16">
            <h2 class="text-2xl font-[Playfair Display] font-bold mb-8">Latest Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-white rounded-lg overflow-hidden border border-gray-200">
                    <img src="https://creatie.ai/ai/api/search-image?query=A professional workspace with modern technology devices and minimalist design elements on a clean white desk with soft natural lighting&width=400&height=250&orientation=landscape&flag=aac86646-45ac-4eb0-a449-33f60cd28e66"
                        alt="Tech Workspace" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-custom text-sm font-semibold">Technology</span>
                        <h3 class="mt-2 text-xl font-[Playfair Display] font-bold">The Rise of Remote Work Technology
                        </h3>
                        <p class="mt-2 text-gray-600">How new tools and platforms are shaping the future of work...</p>
                    </div>
                </article>
                <article class="bg-white rounded-lg overflow-hidden border border-gray-200">
                    <img src="https://creatie.ai/ai/api/search-image?query=A serene wellness scene with natural elements, meditation accessories, and soft lighting creating a calming atmosphere&width=400&height=250&orientation=landscape&flag=878aaa32-3a45-4b0b-a3b1-75ffadaacc9a"
                        alt="Wellness" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-custom text-sm font-semibold">Lifestyle</span>
                        <h3 class="mt-2 text-xl font-[Playfair Display] font-bold">Mindfulness in the Digital Age</h3>
                        <p class="mt-2 text-gray-600">Finding balance and peace in our connected world...</p>
                    </div>
                </article>
                <article class="bg-white rounded-lg overflow-hidden border border-gray-200">
                    <img src="https://creatie.ai/ai/api/search-image?query=An innovative sustainable technology concept with renewable energy elements and eco-friendly solutions in a modern setting&width=400&height=250&orientation=landscape&flag=da968708-8259-45c8-897d-e8d3963fce8b"
                        alt="Sustainability" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-custom text-sm font-semibold">Science</span>
                        <h3 class="mt-2 text-xl font-[Playfair Display] font-bold">Sustainable Tech Solutions</h3>
                        <p class="mt-2 text-gray-600">Innovations driving environmental sustainability...</p>
                    </div>
                </article>
            </div>
        </section>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <section class="lg:col-span-2">
                <h2 class="text-2xl font-[Playfair Display] font-bold mb-8">Trending Stories</h2>
                <div class="space-y-6">
                    <article class="flex gap-6 bg-white p-4 rounded-lg border border-gray-200">
                        <img src="https://creatie.ai/ai/api/search-image?query=A modern urban cityscape with innovative transportation solutions and smart city technology integration&width=200&height=150&orientation=landscape&flag=4e23ef49-78c1-4e8e-846d-c6027567a254"
                            alt="Smart Cities" class="w-48 h-32 object-cover rounded-lg">
                        <div>
                            <span class="text-custom text-sm font-semibold">Urban Development</span>
                            <h3 class="mt-2 text-xl font-[Playfair Display] font-bold">Smart Cities of Tomorrow</h3>
                            <p class="mt-2 text-gray-600">How urban planning is evolving with technology...</p>
                        </div>
                    </article>
                    <article class="flex gap-6 bg-white p-4 rounded-lg border border-gray-200">
                        <img src="https://creatie.ai/ai/api/search-image?query=A creative workspace with digital art tools and modern design elements in a professional setting&width=200&height=150&orientation=landscape&flag=1f69df12-2ac0-4c40-8c3d-17e07bb10c54"
                            alt="Digital Art" class="w-48 h-32 object-cover rounded-lg">
                        <div>
                            <span class="text-custom text-sm font-semibold">Digital Arts</span>
                            <h3 class="mt-2 text-xl font-[Playfair Display] font-bold">The Evolution of Digital
                                Creativity</h3>
                            <p class="mt-2 text-gray-600">New tools reshaping artistic expression...</p>
                        </div>
                    </article>
                </div>
            </section>

            <aside>
                <div class="bg-white p-6 rounded-lg border border-gray-200">
                    <h3 class="text-xl font-[Playfair Display] font-bold mb-6">Trending Topics</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">#Technology</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">#Innovation</span>
                        <span
                            class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">#DigitalTransformation</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">#Sustainability</span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-sm text-gray-700">#FutureOfWork</span>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-xl font-[Playfair Display] font-bold mb-6">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-custom hover:text-custom/80 text-xl"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="text-custom hover:text-custom/80 text-xl"><i
                                    class="fab fa-facebook"></i></a>
                            <a href="#" class="text-custom hover:text-custom/80 text-xl"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="text-custom hover:text-custom/80 text-xl"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>

    <footer class="bg-gray-900 text-white mt-16">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="The Daily Pulse"
                        class="h-8 mb-4">
                    <p class="text-gray-400">Your source for insightful news and analysis in technology, lifestyle, and
                        culture.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Advertise</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Technology</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Business</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Science</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Health</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Subscribe</h4>
                    <form class="space-y-4">
                        <input type="email" placeholder="Your email address"
                            class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-custom focus:border-transparent">
                        <button type="submit"
                            class="!rounded-button w-full bg-custom text-white px-4 py-2 hover:bg-custom/90">Subscribe
                            Now</button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 The Daily Pulse. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
