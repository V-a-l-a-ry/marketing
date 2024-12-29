<x-frontend-layout>
    <div class="pb-20 pt-2 bg-gray-100" data-aos="fade">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <!-- Back to Galleries Button with Back Arrow -->
            <div class="flex items-center justify-between mb-6">
                <!-- Back Arrow Button -->
                <a href="{{ route('exhibits.index') }}"
                    class="flex items-center text-green-600 hover:text-green-700 space-x-2 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="text-lg font-medium">Back to Galleries</span>
                </a>

                <!-- Gallery Title -->
                <h2 class="text-3xl font-extrabold text-gray-800 border-b-4 border-green-500 pb-1">
                    {{ $gallery->title }}
                </h2>
            </div>

            <!-- Gallery Images -->
            <div id="lightgallery" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse ($gallery->images as $image)
                    <a href="{{ $image->path ? asset('storage/' . $image->path) : asset('images/person_1.jpg') }}"
                        class="group relative bg-white rounded-lg shadow hover:shadow-xl transition duration-300 overflow-hidden"
                        data-sub-html="<h4 class='font-semibold text-lg'>{{ $image->photo_comment ?? 'No Comment' }}</h4>
                                      <p class='text-sm text-gray-600'>{{ $image->photo_description ?? 'No Description' }}</p>">
                        <img src="{{ $image->path ? asset('storage/' . $image->path) : asset('images/person_1.jpg') }}"
                            alt="{{ $image->photo_comment ?? 'Gallery Image' }}"
                            class="w-full h-64 object-cover transition-transform transform group-hover:scale-110">
                        <!-- Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent opacity-0 group-hover:opacity-80 transition duration-300 flex items-end p-4">
                            <p class="text-white text-sm font-medium truncate">
                                {{ $image->photo_comment ?? 'View Details' }}
                            </p>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-10">
                        <p class="text-gray-500 text-lg">No images found for this gallery.</p>
                        <img src="{{ asset('images/empty_gallery.svg') }}" alt="Empty Gallery"
                            class="w-32 mx-auto mt-4">
                    </div>
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
