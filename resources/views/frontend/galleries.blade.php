<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Gallery Collection</title>
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
    <header class="bg-white shadow-sm fixed w-full z-50">
        <nav class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center"> <img class="h-8 w-auto"
                            src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="Logo">
                    </div>
                    <div class="hidden sm:ml-8 sm:flex sm:space-x-8">
                        <a href="#"
                            class="border-b-2 border-custom text-custom px-1 inline-flex items-center h-full text-sm font-medium">Galleries</a>
                        <a href="#"
                            class="border-b-2 border-transparent hover:border-gray-300 text-gray-500 hover:text-gray-700 px-1 inline-flex items-center h-full text-sm font-medium">Artists</a>
                        <a href="#"
                            class="border-b-2 border-transparent hover:border-gray-300 text-gray-500 hover:text-gray-700 px-1 inline-flex items-center h-full text-sm font-medium">Exhibitions</a>
                        <a href="#"
                            class="border-b-2 border-transparent hover:border-gray-300 text-gray-500 hover:text-gray-700 px-1 inline-flex items-center h-full text-sm font-medium">About</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <button
                        class="!rounded-button bg-custom text-white px-4 py-2 text-sm font-medium hover:bg-opacity-90">Sign
                        In</button>
                </div>
            </div>
        </nav>
    </header>

    <main class="pt-20 pb-16">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8 space-y-4 md:space-y-0">
                <div class="w-full md:w-96 relative"> <input type="text" placeholder="Search galleries..."
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:ring-custom focus:border-custom">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                </div>

                <div class="flex space-x-4"> <select
                        class="border border-gray-300 rounded-md py-2 pl-3 pr-8 focus:ring-custom focus:border-custom">
                        <option>All Categories</option>
                        <option>Contemporary</option>
                        <option>Modern Art</option>
                        <option>Photography</option>
                        <option>Sculptures</option>
                    </select>
                    <select
                        class="border border-gray-300 rounded-md py-2 pl-3 pr-8 focus:ring-custom focus:border-custom">
                        <option>Latest</option>
                        <option>Popular</option>
                        <option>Alphabetical</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9"> <img
                            src="https://creatie.ai/ai/api/search-image?query=A modern art gallery interior with white walls displaying contemporary abstract paintings, featuring clean lines and minimalist design with subtle lighting and polished concrete floors&width=800&height=450&orientation=landscape&flag=cdc6eb43-1737-4eea-be7a-50442ea4b586"
                            alt="Modern Gallery" class="object-cover"> </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Modern Art Collection</h3>
                        <p class="text-gray-600 text-sm mb-4">Explore our curated collection of contemporary
                            masterpieces from emerging artists around the globe.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="far fa-eye mr-2"></i>
                            <span>2.4k views</span>
                            <div class="mx-2">·</div>
                            <i class="far fa-star mr-2"></i>
                            <span>4.8</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9"> <img
                            src="https://creatie.ai/ai/api/search-image?query=A photography exhibition space with black walls and spotlights illuminating framed black and white photographs, creating dramatic shadows and contrast&width=800&height=450&orientation=landscape&flag=de6a5b29-0b94-43ea-9bf9-50f06651bcfa"
                            alt="Photography Gallery" class="object-cover"> </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Photography Masters</h3>
                        <p class="text-gray-600 text-sm mb-4">A stunning showcase of international photography talent
                            featuring both classic and contemporary works.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="far fa-eye mr-2"></i>
                            <span>1.8k views</span>
                            <div class="mx-2">·</div>
                            <i class="far fa-star mr-2"></i>
                            <span>4.6</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9"> <img
                            src="https://creatie.ai/ai/api/search-image?query=A sculpture garden with natural light streaming through glass ceiling panels, featuring modern metal and stone sculptures arranged among indoor plants and water features&width=800&height=450&orientation=landscape&flag=155b6246-f6a1-4554-ba71-0b6b163f4d20"
                            alt="Sculpture Gallery" class="object-cover"> </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Sculpture Garden</h3>
                        <p class="text-gray-600 text-sm mb-4">An immersive experience featuring large-scale sculptures
                            and installations in our indoor-outdoor space.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="far fa-eye mr-2"></i>
                            <span>3.2k views</span>
                            <div class="mx-2">·</div>
                            <i class="far fa-star mr-2"></i>
                            <span>4.9</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9"> <img
                            src="https://creatie.ai/ai/api/search-image?query=An impressionist art gallery with warm lighting and wooden floors, displaying colorful landscape paintings in ornate gold frames against sage green walls&width=800&height=450&orientation=landscape&flag=356f0172-66da-4ef3-ae77-4a4daa8e6dcf"
                            alt="Impressionist Gallery" class="object-cover"> </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Impressionist Collection</h3>
                        <p class="text-gray-600 text-sm mb-4">Discover the beauty of light and color through our
                            extensive collection of impressionist masterpieces.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="far fa-eye mr-2"></i>
                            <span>2.1k views</span>
                            <div class="mx-2">·</div>
                            <i class="far fa-star mr-2"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9"> <img
                            src="https://creatie.ai/ai/api/search-image?query=A digital art gallery with interactive LED screens and projection mapping displays, showing vibrant new media artworks in a dark space with neon accents&width=800&height=450&orientation=landscape&flag=121bd8c2-e583-4f75-8d34-5e21b16a463c"
                            alt="Digital Gallery" class="object-cover"> </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Digital Art Space</h3>
                        <p class="text-gray-600 text-sm mb-4">Experience the future of art through interactive digital
                            installations and new media works.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="far fa-eye mr-2"></i>
                            <span>4.5k views</span>
                            <div class="mx-2">·</div>
                            <i class="far fa-star mr-2"></i>
                            <span>4.9</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9"> <img
                            src="https://creatie.ai/ai/api/search-image?query=A traditional art gallery with high ceilings and classical architecture, showcasing renaissance paintings and sculptures with dramatic spotlighting and marble floors&width=800&height=450&orientation=landscape&flag=23a09ef8-57ea-42e8-831c-2d06236eea7c"
                            alt="Classical Gallery" class="object-cover"> </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Classical Heritage</h3>
                        <p class="text-gray-600 text-sm mb-4">Step into history with our collection of classical art
                            spanning multiple centuries and traditions.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="far fa-eye mr-2"></i>
                            <span>1.9k views</span>
                            <div class="mx-2">·</div>
                            <i class="far fa-star mr-2"></i>
                            <span>4.8</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex items-center justify-between">
                <div class="flex-1 flex justify-between sm:hidden"> <button
                        class="!rounded-button relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Previous</button>
                    <button
                        class="!rounded-button relative ml-3 inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Next</button>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing <span class="font-medium">1</span> to <span class="font-medium">6</span> of <span
                                class="font-medium">24</span> results
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px"
                            aria-label="Pagination"> <button
                                class="!rounded-button relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <i class="fas fa-chevron-left h-5 w-5"></i>
                            </button>
                            <button
                                class="!rounded-button bg-custom border-custom z-10 relative inline-flex items-center px-4 py-2 border text-sm font-medium text-white">1</button>
                            <button
                                class="!rounded-button bg-white border-gray-300 relative inline-flex items-center px-4 py-2 border text-sm font-medium text-gray-700 hover:bg-gray-50">2</button>
                            <button
                                class="!rounded-button bg-white border-gray-300 relative inline-flex items-center px-4 py-2 border text-sm font-medium text-gray-700 hover:bg-gray-50">3</button>
                            <button
                                class="!rounded-button bg-white border-gray-300 relative inline-flex items-center px-4 py-2 border text-sm font-medium text-gray-700 hover:bg-gray-50">4</button>
                            <button
                                class="!rounded-button relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <i class="fas fa-chevron-right h-5 w-5"></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-gray-200">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-4"> <img class="h-8 w-auto"
                        src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="Logo">
                    <span class="text-sm text-gray-500">© 2024 Art Gallery. All rights reserved.</span>
                </div>
                <div class="flex space-x-6 mt-4 md:mt-0"> <a href="#"
                        class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
