<x-frontend-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Featured Section -->
        @if ($newsletters->isNotEmpty())
            <div class="bg-gray-100 rounded-lg shadow-lg mb-12 overflow-hidden">
                <div class="flex flex-col lg:flex-row">
                    <div class="lg:w-1/2 bg-cover bg-center"
                        style="background-image: url('{{ $newsletters->first()->image_url ?? 'default-feature-image.jpg' }}'); height: 300px;">
                    </div>
                    <div class="lg:w-1/2 p-6">
                        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $newsletters->first()->title }}</h1>
                        <p class="text-gray-600 mb-4">
                            {{ Str::limit(strip_tags($newsletters->first()->content), 150) }}
                        </p>
                        <p class="text-gray-500 text-sm mb-2">Category: <span
                                class="font-medium">{{ $newsletters->first()->category_id }}</span></p>
                        <p class="text-gray-500 text-sm">Send Date: <span
                                class="font-medium">{{ $newsletters->first()->send_date ? $newsletters->first()->send_date->format('F j, Y') : 'Not Scheduled' }}</span>
                        </p>
                        <div class="mt-6">
                            <a href="{{ route('newsletters.show', $newsletters->first()->id) }}"
                                class="inline-block px-6 py-2 text-sm font-medium text-white bg-green-700 rounded hover:bg-green-600 transition duration-300">
                                Read Featured Newsletter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Main Newsletter List -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800">Newsletters</h1>
            <p class="text-gray-600 mt-2">Stay updated with our latest newsletters</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($newsletters->skip(1) as $newsletter)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-3">
                            {{ $newsletter->title }}
                        </h2>
                        <p class="text-gray-600 text-sm mb-4">
                            {{ Str::limit(strip_tags($newsletter->content), 100) }}
                        </p>
                        <p class="text-gray-500 text-xs mb-2">Category: <span
                                class="font-medium">{{ $newsletter->category_id }}</span></p>
                        <p class="text-gray-500 text-xs">Send Date: <span
                                class="font-medium">{{ $newsletter->send_date ? $newsletter->send_date->format('F j, Y') : 'Not Scheduled' }}</span>
                        </p>
                        <div class="mt-6 text-center">
                            <a href="{{ route('newsletters.show', $newsletter->id) }}"
                                class="inline-block px-6 py-2 text-sm font-medium text-white bg-green-700 rounded hover:bg-green-600 transition duration-300">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center">
                    <p class="text-gray-500">No newsletters available.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-frontend-layout>
