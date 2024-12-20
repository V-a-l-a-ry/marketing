<x-frontend-layout>
    <div class="pb-20 pt-2 bg-gray-50" data-aos="fade">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Back to Galleries Button with Back Arrow -->
            <div class="flex items-center justify-between mb-4">
                <!-- Back Arrow Button -->
                <a href="{{ route('exhibits.index') }}" 
                   class="text-blue-500 hover:text-blue-600 flex items-center space-x-2 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span>Back to Galleries</span>
                </a>

                <!-- Gallery Title -->
                <h2 class="text-2xl font-bold text-gray-900 border-b-2 border-custom py-2">
                    {{ $gallery->title }}
                </h2>
            </div>

            <!-- Gallery Images -->
            <div id="lightgallery" class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-3">
                @forelse ($gallery->images as $image)
                    <a href="{{ $image->path ? asset('storage/' . $image->path) : asset('images/person_1.jpg') }}"
                        class="relative group bg-white shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
                        data-sub-html="<h4 class='font-semibold text-lg'>{{ $image->photo_comment ?? 'No Comment' }}</h4>
                                       <p class='text-sm text-gray-600'>{{ $image->photo_description ?? 'No Description' }}</p>">
                        <img src="{{ $image->path ? asset('storage/' . $image->path) : asset('images/person_1.jpg') }}"
                            alt="{{ $image->photo_comment ?? 'Gallery Image' }}"
                            class="w-full h-64 object-cover transition-transform transform group-hover:scale-105">
                    </a>
                @empty
                    <p class="text-center text-gray-500">No images found for this gallery.</p>
                @endforelse
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            lightGallery(document.getElementById('lightgallery'), {
                thumbnail: true,
                animateThumb: true,
                showThumbByDefault: true,
                speed: 500,
            });
        });
    </script>
</x-frontend-layout>
