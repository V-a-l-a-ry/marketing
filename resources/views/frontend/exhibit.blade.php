<x-frontend-layout>
    <div class="pt-2 pb-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl">Explore Our Galleries</h1>
                <p class="mt-2 text-lg text-gray-600">Discover beautiful collections curated just for you.</p>
            </div>

            <!-- Gallery Grid -->
            @if ($galleries->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($galleries as $gallery)
                        <div
                            class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <div class="relative">
                                <img src="{{ $gallery->media_url }}" alt="{{ $gallery->title }}"
                                    class="object-cover w-full h-48 rounded-t-lg">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-40 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center rounded-t-lg">
                                    <a href="{{ route('exhibits.show', $gallery->id) }}"
                                        class="text-white bg-custom py-2 px-4 rounded-lg text-sm font-medium hover:bg-opacity-90">
                                        View Gallery
                                    </a>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-900 truncate">{{ $gallery->title }}</h3>
                                <p class="mt-2 text-sm text-gray-600">Discover a stunning collection of photos.</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <p class="text-lg text-gray-600">No galleries found. Please check back later!</p>
                </div>
            @endif
        </div>
    </div>
</x-frontend-layout>
