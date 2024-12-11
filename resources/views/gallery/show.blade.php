<x-layout>
    <div class="site-section py-6" data-aos="fade">
        <div class="">
            <div class="text-center mb-5">
                <h2 class="text-2xl font-bold border flex items-center justify-center shadow-lg bg-white border-green-800 uppercase">{{ $gallery->name }}</h2>
            </div>
            <div id="lightgallery" class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2">
                @forelse ($images as $image)
                    <a href="{{ $image->path ? asset('storage/' . $image->path) : asset('images/person_1.jpg') }}" class="relative group" data-sub-html="<h4>{{ $image->photo_comment }}</h4><p>{{ $image->photo_description }}</p>">
                        <img src="{{ $image->path ? asset('storage/' . $image->path) : asset('images/person_1.jpg') }}" alt="Image" class="w-full h-auto shadow-sm transition-transform transform group-hover:scale-105">
                    </a>
                @empty
                    <p class="text-center text-gray-500">No Image(s) Found</p>
                @endforelse
            </div>
            <div class="text-center mt-6">
                <a href="{{ route('photos.create', ['gallery' => $gallery->id]) }}" class="px-4 py-2 bg-green-800 text-white text-xl font-medium hover:bg-green-700 transition">Upload New Photos</a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            lightGallery(document.getElementById('lightgallery'), {
                thumbnail: true,
                animateThumb: true,
                showThumbByDefault: true
            });
        });
    </script>
</x-layout>