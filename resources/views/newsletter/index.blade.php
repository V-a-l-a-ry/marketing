<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Newsletters</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
</head>
<body class="font-sans bg-cover bg-center" style="background-image: url('./img/body.jpeg');">

  <!-- Header -->
  <header class="bg-green-800 text-white py-6">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl font-bold">University Newsletters</h1>
      <p class="mt-2">Stay connected with campus news, events, and achievements.</p>
      <div class="p-2 mt-4 bg-white text-green-800">
        <a href="{{ route('newsletter.create') }}" class="btn btn-success">Upload New Newsletter</a>
      </div>
    </div>
  </header>

  <!-- Navigation -->
  <nav class="sticky top-0 md:py-6 text-green-800 bg-white">
    <ul class="flex items-center justify-center gap-6">
      <li class="nav-item font-bold"><a href="{{ url('/') }}">Home</a></li>
      <li class="nav-item font-bold"><a href="{{ route('galleries.index') }}">Gallery</a></li>
      <li class="nav-item font-bold"><a href="{{ route('newsletter') }}">Newsletters</a></li>
      <li class="nav-item font-bold"><a href="https://www.dkut.ac.ke/">University Website</a></li>
    </ul>
  </nav>

  <!-- Main Content -->
  <main class="container mx-auto px-4 py-8">
    <!-- Featured Newsletter -->
    <section class="mb-12">
      <h2 class="text-2xl font-bold mb-4">Featured Newsletter</h2>
      @if($newsletters->isNotEmpty())
        @php
          $featured = $newsletters->first();
        @endphp
        <div class="bg-white shadow-lg p-6 flex flex-col md:flex-row">
          <img src="{{ asset($featured->image_path ?? './img/default.jpg') }}" alt="Featured Newsletter" class="w-full md:w-1/3">
          <div class="md:ml-6 mt-4 md:mt-0">
            <h3 class="text-xl font-semibold">{{ $featured->title }}</h3>
            <p class="mt-2 text-gray-700">{{ Str::limit($featured->excerpt, 100) }}</p>
            <a href="{{ route('newsletter.show', $featured->id) }}" class="inline-block mt-4 bg-green-800 text-white py-2 px-4 hover:bg-green-400">Read More</a>
          </div>
        </div>
      @else
        <p>No featured newsletters available.</p>
      @endif
    </section>

    <!-- Browse All Newsletters -->
    <section class="mb-12">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Browse All Newsletters</h2>
        <input type="text" placeholder="Search newsletters..." class="border border-gray-300 py-2 px-4 w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($newsletters as $newsletter)
          <div class="bg-white shadow-lg overflow-hidden">
            <img src="{{ asset($newsletter->image_path ?? './img/default.jpg') }}" alt="Newsletter" class="w-full h-40 object-cover">
            <div class="p-4">
              <h3 class="font-bold text-lg">{{ $newsletter->title }}</h3>
              <p class="text-sm text-gray-600 mt-2"><strong>Published:</strong> {{ $newsletter->published_at->format('M d, Y') }}</p>
              <p class="text-sm text-gray-600"><strong>Topics:</strong> {{ $newsletter->topics }}</p>
              <a href="{{ route('newsletter.show', $newsletter->id) }}" class="inline-block mt-4 bg-green-800 text-white py-2 px-4 hover:bg-green-400">Read Now</a>
            </div>
          </div>
        @empty
          <p>No newsletters available to display.</p>
        @endforelse
      </div>
      
      <!-- Pagination -->
      <div class="mt-6">
        {{ $newsletters->links() }}
      </div>
    </section>

    <!-- Subscribe to Newsletters -->
    <section class="bg-white shadow-lg p-6">
      <h2 class="text-2xl font-bold mb-4">Subscribe to Newsletters</h2>
      <p class="text-gray-700 mb-4">Stay in the loop! Enter your email below to receive our newsletters directly to your inbox.</p>
      <form class="flex flex-col sm:flex-row items-center">
        <input type="email" placeholder="Enter your email" class="flex-grow border border-gray-300 py-2 px-4 mb-4 sm:mb-0 sm:mr-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <button type="submit" class="bg-green-800 text-white py-2 px-6 hover:bg-green-400">Subscribe</button>
      </form>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-green-800 text-white py-6 mt-12">
    <div class="container mx-auto px-4 text-center">
      <p>&copy; 2024 University Newsletters. All Rights Reserved.</p>
    </div>
  </footer>

</body>
</html>
