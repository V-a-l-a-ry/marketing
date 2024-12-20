<x-frontend-layout>
    <div class="pt-2 pb-16">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-2 space-y-4 md:space-y-0">
                <!-- Search and Filter Section (Optional) -->
                <div class="w-full md:w-96 relative">
                    <input type="text" placeholder="Search galleries..." class="w-full pl-10 pr-4 py-2 border border-gray-300 focus:ring-custom focus:border-custom">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                </div>
                
                <div class="flex space-x-4">
                    <select class="border border-gray-300 py-2 pl-3 pr-8 focus:ring-custom focus:border-custom">
                        <option>All Categories</option>
                        <option>Contemporary</option>
                        <option>Modern Art</option>
                        <option>Photography</option>
                        <option>Sculptures</option>
                    </select>
                    
                    <select class="border border-gray-300 py-2 pl-3 pr-8 focus:ring-custom focus:border-custom">
                        <option>Latest</option>
                        <option>Popular</option>
                        <option>Alphabetical</option>
                    </select>
                </div>
            </div>

            <!-- Gallery Grid -->
            @if ($galleries->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                    @foreach ($galleries as $gallery)
                        <div class="bg-white shadow-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 ease-in-out">
                            <div class="aspect-w-16 aspect-h-9">
                                <img src="{{ $gallery->media_url }}" alt="{{ $gallery->title }}" class="object-cover w-full h-full">
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $gallery->title }}</h3>
                                <a href="{{ route('exhibits.show', $gallery->id) }}" class="text-custom hover:text-opacity-90 py-2 px-4 inline-block border-b-2 border-transparent hover:border-custom text-sm font-medium">More Photos</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-600">No galleries found</p>
            @endif
        </div>
    </div>
</x-frontend-layout>
