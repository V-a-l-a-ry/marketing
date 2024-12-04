<x-layout>
    <div class="container min-h-screen">
        <h1 class="text-2xl font-bold mb-6">Upload New Image</h1>
    
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif
    
        <form method="POST" action="/gallery" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">Gallery Name</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{ old('name') }}"
                />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="gallery_description" class="inline-block text-lg mb-2">Gallery Description</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="gallery_description"
                    placeholder="Example: Nature"
                    value="{{ old('gallery_description') }}"
                />
                @error('gallery_description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="gallery_comments" class="inline-block text-lg mb-2">Gallery Comments</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="gallery_comments"
                    placeholder="Example: 👌😍 lovely"
                    value="{{ old('gallery_comments') }}"
                />
                @error('gallery_comments')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="thumbnail" class="inline-block text-lg mb-2">Thumbnail</label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="thumbnail"
                    accept="image/*"
                />
                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="mb-6 flex items-center">
                <button class="bg-red-600 text-white rounded py-2 px-4 hover:bg-black">
                    Create Gallery
                </button>
                <a href="/galleries" class="text-black ml-4">Back</a>
            </div>
        </form>
    </div>
</x-layout>

