
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Manage Photos - {{ $gallery->name }}</h1>

    <!-- Upload Photos Form -->
    <form action="{{ route('photos.store', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-6 mb-6">
        @csrf
        <div class="mb-4">
            <label for="photos" class="block text-gray-700 font-bold mb-2">Upload Photos</label>
            <input type="file" id="photos" name="photos[]" class="border w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" multiple required>
        </div>
        <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700">Upload Photos</button>
    </form>

    <!-- Photo List -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($gallery->photos as $photo)
        <div class="bg-white shadow-lg overflow-hidden">
            <img src="{{ $photo->url }}" alt="Photo" class="w-full h-40 object-cover">
            <div class="p-4">
                <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    
</div>

