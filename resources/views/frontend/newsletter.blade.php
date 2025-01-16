<x-frontend-layout>
    <div class="mx-auto px-6 py-8 grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Sidebar -->
        <aside class="col-span-1 lg:col-span-1">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold mb-4">Categories</h2>
                <div class="space-y-3">
                    @php
                        $categories = $newsletters->pluck('category_id')->unique();
                    @endphp

                    @foreach ($categories as $category)
                        @php
                            $articleCount = $newsletters->where('category_id', $category)->count();
                        @endphp
                        <a href="{{ route('newsletters.index', ['category' => $category]) }}"
                            class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50">
                            <div class="flex items-center">
                                <i class="fas fa-tag w-5"></i>
                                <span class="ml-3">{{ $category ?? 'Uncategorized' }}</span>
                            </div>
                            <span class="text-sm">{{ $articleCount }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="col-span-1 lg:col-span-3">
            @if ($newsletters->isNotEmpty())
                <div class="relative bg-white rounded-lg font-bold shadow-sm mb-8 overflow-hidden group">
                    <img src="https://i.pinimg.com/736x/bf/1d/df/bf1ddf5a001515cfeb53f7f02879703e.jpg"
                        alt="Featured Newsletter"
                        class="w-full h-[400px] object-cover group-hover:opacity-70 transition duration-300" />
                    <div
                        class="absolute inset-0 flex flex-col font-bold justify-end bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 p-6">
                        <h1 class="text-2xl font-bold text-white mt-2 mb-3">
                            {{ $newsletters->first()->title }}
                        </h1>
                        <span class="bg-custom/10 text-white px-2.5 py-0.5 rounded-full text-xs">
                            {{ $newsletters->first()->category_id ?? 'Uncategorized' }}
                        </span>
                        <p class="text-gray-200 mb-4">
                            {{ Str::limit(strip_tags($newsletters->first()->content), 150) }}
                        </p>
                        <div class="flex items-center text-sm text-gray-300">
                            <span><i
                                    class="far fa-clock mr-1"></i>{{ $newsletters->first()->read_time ?? '5 min read' }}</span>
                            <span class="mx-2">·</span>
                            <span>{{ $newsletters->first()->send_date ? $newsletters->first()->send_date->format('F j, Y') : 'Not Scheduled' }}</span>
                        </div>
                        @if ($newsletters->first()->file_url)
                            <div class="mt-4">
                                <a href="{{ asset('storage/' . $newsletters->first()->file_url) }}" target="_blank"
                                    class="text-green-400 font-medium hover:underline transition duration-300">
                                    Download File
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800">Newsletters</h1>
                <p class="text-gray-600 mt-2">Stay updated with our latest newsletters</p>
            </div>

            @php
                $filteredCategory = request('category');
                $filteredNewsletters = $filteredCategory
                    ? $newsletters->where('category_id', $filteredCategory)
                    : $newsletters;
                $groupedNewsletters = $filteredNewsletters->groupBy('category_id');
            @endphp

            @if ($filteredNewsletters->isEmpty())
                <p class="text-gray-500 text-center">No newsletters found for this category.</p>
            @else
                @foreach ($groupedNewsletters as $category => $categoryNewsletters)
                    <div class="mb-12">
                        <h2 class="text-3xl font-semibold text-gray-800 mb-6">
                            {{ $category ?? 'Uncategorized' }}
                        </h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach ($categoryNewsletters as $newsletter)
                                <div class="bg-green-50 rounded-lg shadow-sm p-6 hover:shadow-lg">
                                    {{-- <img src="{{ $newsletter->image_url ?? 'default-placeholder.jpg' }}"
                                        alt="{{ $newsletter->title }}"
                                        class="w-full h-[200px] object-cover rounded-lg mb-4" /> --}}
                                    <h3 class="text-xl font-semibold mt-2 mb-3">{{ $newsletter->title }}</h3>
                                    <p class="text-gray-600 text-sm mb-4">
                                        {{ Str::limit(strip_tags($newsletter->content), 100) }}</p>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <span><i
                                                class="far fa-clock mr-1"></i>{{ $newsletter->read_time ?? '5 min read' }}</span>
                                        <span class="mx-2">·</span>
                                        <span>{{ $newsletter->send_date ? $newsletter->send_date->format('F j, Y') : 'Not Scheduled' }}</span>
                                    </div>
                                    <div class="mt-4">
                                        <a href="{{ asset('storage/' . $newsletter->content_file) }}"
                                            class="inline-block text-white px-4 py-2 rounded-lg text-sm bg-green-500">
                                            Download File
                                        </a>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endif
        </main>
    </div>
</x-frontend-layout>
