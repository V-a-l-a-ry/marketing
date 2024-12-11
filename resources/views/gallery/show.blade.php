<!-- resources/views/galleries/show.blade.php -->

<x-layout>
    <div class="px-4 py-8" data-aos="fade" data-aos-delay="500">
        <h2 class="text-3xl font-bold mb-6 uppercase text-center">{{ $galleryName }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @if (!empty($images) && count($images) > 0)
                @foreach ($images as $image)
                    <div class="overflow-hidden shadow-md transform hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset($image) }}" alt="{{ basename($image) }}" class="w-full h-96 object-cover">
                    </div>
                @endforeach
            @else
                <div class="col-span-full text-center">
                    <p class="text-gray-500 uppercase">No images found in this gallery.</p>
                </div>
            @endif
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('galleries.index') }}" class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold shadow hover:bg-blue-700 transition duration-300">
                Back to Galleries
            </a>
        </div>
    </div>
</x-layout>
