<div>
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">Newsletter Upload</h1>
                    <p class="text-white link-nav">
                        <a href="{{ url('/') }}">Home</a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="{{ route('newsletter.index') }}">Newsletter</a>
                        <span class="lnr lnr-arrow-right"></span>
                        Newsletter Upload
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-50 mb-50">
        <!-- Newsletter Upload Form -->
        <form action="{{ route('newsletter.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Newsletter Title -->
            <div class="mb-4">
                <label for="title" class="form-label text-sm font-medium text-gray-700">Newsletter Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    class="form-control mt-1 w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" 
                    required>
                @error('title') 
                    <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>

            <!-- Newsletter Content Folder -->
            <div class="mb-4">
                <label for="content_folder" class="form-label text-sm font-medium text-gray-700">Content Folder</label>
                <input 
                    type="file" 
                    id="content_folder" 
                    name="content_folder[]" 
                    class="form-control mt-1 w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" 
                    webkitdirectory
                    required>
                @error('content_folder') 
                    <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>

            <!-- Newsletter Category -->
            <div class="mb-4">
                <label for="category" class="form-label text-sm font-medium text-gray-700">Category</label>
                <select 
                    id="category" 
                    name="category" 
                    class="form-control mt-1 w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" 
                    required>
                    <option value="Luminary">Luminary</option>
                    <option value="Featured Newsletter">Featured Newsletter</option>
                </select>
                @error('category') 
                    <span class="text-red-500 text-sm">{{ $message }}</span> 
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-4">
                <button 
                    type="submit" 
                    class="btn btn-primary px-4 py-2 shadow-sm hover:shadow-lg transition duration-300">
                    Upload Newsletter
                </button>
            </div>
        </form>

        <!-- Success Message -->
        @if (session()->has('message'))
            <div class="alert alert-success mt-4">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <!-- CKEditor 5 CDN -->
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

</div>
