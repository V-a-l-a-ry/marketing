<div class="container">
    <h2>Upload a New Newsletter</h2>
    @if (session('success'))
        <div id="success-message" style="color: green;">
            {{ session('success') }}
        </div>
        <script>
            // Redirect to the newsletter page after 3 seconds
            setTimeout(() => {
                window.location.href = "{{ route('newsletter') }}";
            }, 3000);
        </script>
    @endif
    <form action="{{ route('/backoffice/newsletter') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Newsletter Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="luminaries">Luminaries</option>
                <option value="feature">Feature</option>
            </select>
        </div>

        <div class="form-group">
            <label for="folder">Upload Content Folder (ZIP or RAR)</label>
            <input type="file" name="folder" id="folder" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="photo">Upload Photo</label>
            <input type="file" name="photo" id="photo" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Upload</button>
    </form>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</div>