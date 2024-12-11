<x-layout>
    <div class="md:w-1/2 sm:w-5/6 w-full mx-auto my-8">
        <h2 class="text-2xl font-semibold mb-4">Upload a New Article</h2>
    
        <!-- Success Message -->
        @if (session('success'))
            <div id="success-message" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
    
        <!-- Form for uploading article -->
        <form action="{{ route('newsletter.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <!-- Article Title -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Article Title</label>
                <input type="text" name="title" id="title"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    required value="{{ old('title') }}">
                @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Category Selection -->
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category" id="category"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    required>
                    <option value="luminaries" {{ old('category') == 'luminaries' ? 'selected' : '' }}>Luminaries</option>
                    <option value="feature" {{ old('category') == 'feature' ? 'selected' : '' }}>Events</option>
                </select>
                @error('category')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Article Content (with CKEditor) -->
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Article Content</label>
                <textarea name="content" id="content" rows="8"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"
                    required>{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Article Image Upload -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                <input type="file" name="image" id="image"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                @error('image')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
    
            <!-- Submit Button -->
            <button type="submit"
                class="w-full py-3 px-6 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-200"
                aria-label="Submit Form">
                Upload Article
            </button>
        </form>
    
        <!-- CKEditor script -->
        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#content'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    </div>
    
    <!-- TailwindCSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
</x-layout>

