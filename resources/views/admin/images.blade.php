<x-layout>
    <main class="flex-1 overflow-y-auto p-8">
        <div class="grid grid-cols-1 gap-8">
            <div class="grid grid-cols-1 gap-8">
                <section class="bg-white shadow">
                    <!-- Gallery Title -->
                    <div class="flex items-center justify-between p-6 border-b">
                        <h3 class="text-lg font-medium text-gray-900">{{ $gallery->title }}</h3>
                        <a href="/admin/galleries">
                            <button class="!rounded-button px-4 py-2 bg-gray-600 text-white hover:bg-gray-700">
                                <i class="fas fa-arrow-left mr-2"></i>Back to Galleries
                            </button>
                        </a>
                    </div>

                    <div class="p-6">
                        <!-- Upload Images Section -->
                        <div class="mb-6">
                            <h4 class="text-lg font-medium text-gray-900 mb-2">Upload Images</h4>
                            <form action="{{ route('galleries.uploadImages', ['gallery' => $gallery->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="images[]" multiple accept="image/*"
                                    class="mb-4 border border-gray-300 p-2">
                                <button type="submit"
                                    class="px-4 py-2 bg-gray-600 text-white hover:bg-black">
                                    <i class="fas fa-cloud-upload-alt mr-2"></i>Upload Images
                                </button>
                            </form>
                        </div>

                        <!-- Gallery Description -->
                        <p class="text-sm text-gray-600 mb-4">{{ $gallery->description ?? 'No description provided.' }}
                        </p>

                        <!-- Images Grid -->
                        @if ($gallery->images->isNotEmpty())
                            <div class="grid grid-cols-4 gap-2">
                                @foreach ($gallery->images as $image)
                                    <div class="relative group">
                                        <!-- Image -->
                                        <img src="{{ asset('storage/' . $image->path) }}"
                                            class="w-full h-48 object-cover" alt="{{ $gallery->title }}" />

                                        <!-- Hover Actions -->
                                        <div
                                            class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg flex items-center justify-center space-x-3">
                                            <a href="{{ asset('storage/' . $image->path) }}" target="_blank"
                                                class="p-2 bg-white rounded-full text-gray-800 hover:bg-gray-100">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <!-- No Images Message -->
                            <p class="text-center text-gray-500 mt-6">No images available for this gallery.</p>
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </main>
</x-layout>
