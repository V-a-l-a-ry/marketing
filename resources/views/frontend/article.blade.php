<x-frontend-layout>

    <div class="md:w-5/6 mx-auto my-5">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $newsletter->title }}</h1>
            <p class="text-gray-500 text-sm mb-2">Category: {{ $newsletter->category_id ?? 'Uncategorized' }}</p>
            <p class="text-gray-500 text-sm mb-4">Send Date:
                {{ $newsletter->send_date ? $newsletter->send_date->format('F j, Y') : 'Not Scheduled' }}</p>
            <div class="content text-gray-800">
                {!! $newsletter->content !!}
            </div>
            @if ($newsletter->file_url)
                <p class="mt-4">Attached File:
                    <a href="{{ asset('storage/' . $newsletter->file_url) }}" target="_blank"
                        class="text-green-700 font-medium hover:underline">
                        View File
                    </a>
                </p>
            @endif
        </div>
    </div>
</x-frontend-layout>
