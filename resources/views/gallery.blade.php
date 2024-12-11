<x-layout>
    <div class="px-4 py-8" data-aos="fade" data-aos-delay="500">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @if (!empty($galleries) && count($galleries) > 0)
                @foreach ($galleries as $gallery)
                    <div x-data="{ hover: false }" 
                         @mouseenter="hover = true" 
                         @mouseleave="hover = false" 
                         class="relative group overflow-hidden shadow-md transform hover:scale-105 transition-transform duration-300">
                        
                        <!-- Gallery Thumbnail -->
                        <img src="{{ $gallery->thumbnail ? asset('storage/' . $gallery->thumbnail) : asset('images/person_1.jpg') }}"
                            alt="{{ $gallery->name }}"
                            class="w-full h-96 object-cover group-hover:brightness-75 transition-all duration-300">
                        
                        <!-- Overlay on Hover -->
                        <div x-show="hover" 
                             class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-lg font-semibold mb-2 uppercase px-3 py-1 border border-white">{{ $gallery->name }}</h3>
                            <a href="/gallery/{{ $gallery->id }}" class="px-4 py-2 text-center uppercase">View Photos</a>
                            <div class="space-x-4 mb-4 flex flex-col text-center">
                                {{-- <a href="/gallery/{{ $gallery->id }}/edit" class="px-3 py-1 text-yellow-500 uppercase">Edit</a> --}}
                                <form method="POST" action="/gallery/{{ $gallery->id }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" 
                                            class="px-3 py-1 text-red-500 uppercase text-center">Delete</button>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-span-full text-center">
                    <p class="text-gray-500 uppercase text-center">No galleries found.</p>
                </div>
            @endif

            <!-- Create Gallery Button -->
            <div class="col-span-full text-center">
                <a href="{{ route('galleries.create') }}" 
                   class="px-6 py-3 bg-green-600 text-white text-lg font-semibold shadow hover:bg-green-700 transition duration-300">
                    CREATE GALLERY
                </a>
            </div>
        </div>
    </div>
</x-layout>
