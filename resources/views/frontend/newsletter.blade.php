<x-frontend-layout>
    <div class="md:w-5/6 mx-auto">
        <div class="text-center my-5">
            <h1 class="text-3xl font-bold">Newsletters</h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($newsletters as $newsletter)
                <div class="bg-white shadow-md p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $newsletter->title }}</h2>
                    <p class="text-gray-700 text-sm mb-4">
                        {{ Str::limit(strip_tags($newsletter->content), 100) }}
                    </p>
                    <p class="text-gray-500 text-xs mb-2">Category: {{ $newsletter->category_id }}</p>
                    <p class="text-gray-500 text-xs">Send Date:
                        {{ $newsletter->send_date ? $newsletter->send_date->format('F j, Y') : 'Not Scheduled' }}</p>
                    <div class="text-center mt-4">
                        <a href="{{ route('newsletters.show', $newsletter->id) }}"
                            class="px-4 py-2 bg-green-800 text-white rounded hover:bg-green-700">Read More</a>
                    </div>
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500">No newsletters available.</p>
            @endforelse
        </div>
    </div>
</x-frontend-layout>
