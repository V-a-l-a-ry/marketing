<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $newsletter->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="bg-gray-100 font-sans leading-relaxed">
    <!-- Header -->
    <header class="bg-green-800 text-white py-6">
      <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold">{{ $newsletter->title }}</h1>
        <p class="mt-2 text-gray-200">Published: {{ $newsletter->published_at->format('M d, Y') }}</p>
      </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
      <article class="bg-white shadow-lg">
        <!-- Article Header -->
        <div class="mb-6">
          <img
            src="{{ asset($newsletter->image_path ?? './img/default.jpg') }}"
            alt="{{ $newsletter->title }}"
            class="object-cover w-full h-[200px]"
          />
        </div>

        <!-- Article Content -->
        <section class="p-6">
          <h2 class="text-2xl font-bold mb-4">{{ $newsletter->subtitle }}</h2>
          <p class="text-gray-700 mb-4">{{ $newsletter->content }}</p>

          <blockquote class="border-l-4 border-blue-600 italic text-gray-600 px-4 py-2 my-6">
            “{{ $newsletter->quote }}”
            <span class="block text-right">{{ $newsletter->quote_author }}</span>
          </blockquote>

          <h3 class="text-xl font-semibold mt-6 mb-2">Stay Connected</h3>
          <p class="text-gray-700 mb-4">
            We encourage you to share your thoughts or ideas with us.
            Collaboration is the key to unlocking new possibilities. Follow us
            on social media and participate in ongoing discussions about our
            work.
          </p>
        </section>

        <!-- Share and Feedback -->
        <section class="mt-8 p-6">
          <h3 class="text-xl font-semibold mb-4">Share this Newsletter</h3>
          <div class="flex space-x-4">
            <a href="#" class="text-green mx-2 text-2xl hover:text-gray-400">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="text-green mx-2 text-2xl hover:text-gray-400">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-green mx-2 text-2xl hover:text-gray-400">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-green mx-2 text-2xl hover:text-gray-400">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </section>
      </article>
    </main>

    <!-- Related Articles Section -->
    <section class="bg-gray-50 py-8">
      <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-4">Related Newsletters</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach($relatedNewsletters as $related)
            <div class="bg-white shadow-lg overflow-hidden">
              <img
                src="{{ asset($related->image_path ?? './img/default.jpg') }}"
                alt="{{ $related->title }}"
                class="w-full h-40 object-cover"
              />
              <div class="p-4">
                <h3 class="font-bold text-lg">{{ $related->title }}</h3>
                <p class="text-sm text-gray-600 mt-2">
                  <strong>Published:</strong> {{ $related->published_at->format('M d, Y') }}
                </p>
                <a href="{{ route('newsletter.show', $related->id) }}" class="inline-block mt-4 bg-green-800 text-white py-2 px-4 hover:bg-green-400">Read Now</a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
      <div class="container mx-auto px-4 text-center">
        <p>&copy; 2024 University Newsletters. All Rights Reserved.</p>
      </div>
    </footer>
  </body>
</html>
