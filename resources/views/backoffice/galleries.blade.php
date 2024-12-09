<x-layout>
    <div class="min-h-screen" data-aos="fade" data-aos-delay="500">
        <div class="mx-auto px-4">
            @unless (count($galleries) == 0)
                <!-- Responsive Grid Container -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($galleries as $gallery)
                        <!-- Single Gallery Item -->
                        <div class="relative group image-wrap-2 border shadow-lg flex items-center justify-center overflow-hidden">
                            <!-- Image -->
                            <img src="{{ $gallery->thumbnail ? asset('storage/' . $gallery->thumbnail) : asset('images/person_1.jpg') }}"
                                alt="Gallery Image" class="img-fluid w-full h-96 object-cover">

                            <!-- Hover Overlay -->
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <!-- Options -->
                                <h2 class="mb-3 font-bold text-2xl uppercase text-white">{{ $gallery->name }}</h2>

                                <a href="/gallery/{{ $gallery->id }}" class="text-blue-400 hover:underline mb-2">
                                    More Photos
                                </a>

                                <a href="/gallery/{{ $gallery->id }}/edit" class="text-green-400 hover:underline mb-2">
                                    Edit
                                </a>

                                <form method="POST" action="/gallery/{{ $gallery->id }}" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="py-2 px-4 bg-red-500 text-white hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
            @else
                <p class="text-center text-gray-500 mt-6">No galleries found</p>
            @endunless

            <!-- Footer -->
            <div class="footer py-4">
                <div class="container-fluid text-center">
                    <a href="/gallery/create" class="btn btn-primary">Create Gallery</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Button -->
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-200">
        Log Out
    </button>
</form>

</x-layout>
