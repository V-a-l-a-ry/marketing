<x-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg my-8">
        <h1 class="text-2xl text-center font-bold text-gray-800 mb-4">Upload Images to {{ $gallery->name }}</h1>
        
        <form 
            action="{{ route('photos.store', ['gallery' => $gallery->id]) }}" 
            method="POST" 
            enctype="multipart/form-data" 
            class="space-y-4"
        >
            @csrf
            
            <!-- Folder Upload Section -->
            <div>
                <label for="images" class="block text-sm font-medium text-gray-700">Select Folder with Images</label>
                <input 
                    type="file" 
                    id="images" 
                    name="images[]" 
                    multiple  
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                >
                @error('images.*')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            
            <!-- Photo Description -->
            <div>
                <label for="photo_description" class="block text-sm font-medium text-gray-700">Photo Description</label>
                <textarea 
                    id="photo_description" 
                    name="photo_description" 
                    placeholder="Write a description..." 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                >{{old('photo_description')}}</textarea>
                @error('photo_description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            
            <!-- Photo Comment -->
            <div>
                <label for="photo_comment" class="block text-sm font-medium text-gray-700">Photo Comment</label>
                <textarea 
                    id="photo_comment" 
                    name="photo_comment" 
                    placeholder="Add a comment..." 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"
                >{{old('photo_comment')}}</textarea>
                @error('photo_comment')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            
            <!-- Submit Button -->
            <div>
                <button 
                    type="submit" 
                    class="w-full bg-green-800 text-white font-medium py-2 px-4 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                >
                    Upload
                </button>
            </div>
        </form>
    </div>
</x-layout>
