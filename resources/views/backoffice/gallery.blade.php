
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Create Gallery</h1>
    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Gallery Name</label>
            <input type="text" id="name" name="name" class="border rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea id="description" name="description" class="border rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" required></textarea>
        </div>
        <div class="mb-4">
            <label for="cover_image" class="block text-gray-700 font-bold mb-2">Cover Image</label>
            <input type="file" id="cover_image" name="cover_image" class="border rounded-lg w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700">Create Gallery</button>
    </form>
</div>
