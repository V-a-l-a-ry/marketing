
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind CDN -->
    <link rel="stylesheet" href="./css/gallery.css" />

    <script
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
      defer
    ></script>
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    rel="stylesheet"
  />
  </head>
  <body class="font-sans bg-auto bg-center"
  style="background-image: url('./img/body.jpeg');">
    <!-- Header Section -->
    <header
      class="bg-green-800 flex flex-col w-full items-center justify-center"
    >
      <div class="w-full">
        <!-- Navigation Menu -->
        <nav class="md:py-6 items-center justify-center flex">
          <ul class="flex items-center justify-center gap-6">
            <li class="nav-item text-white font-bold mr-2">
              <a href="./home.html">Home</a>
            </li>

            <!-- Academics Dropdown -->
            <li class="relative" x-data="{ open: false }">
              <button
                class="nav-item text-white font-bold flex items-center group mr-2 cursor-pointer"
                @click="open = !open"
              >
                Academics
              </button>
              <div
                x-show="open"
                @click.away="open = false"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="absolute left-0 bg-white border border-gray-200 shadow-md mt-2 py-6 px-8 z-50 w-max"
              >
                <div class="flex gap-12">
                  <!-- Admission Section -->
                  <div>
                    <h3 class="font-bold text-green-800 mb-4">Admission</h3>
                    <ul class="space-y-2">
                      <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                        <a
                          href="https://www.dkut.ac.ke/index.php/academics/admission/application-procedure"
                          >Application Procedure</a
                        >
                      </li>
                      <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                        <a
                          href="https://www.dkut.ac.ke/index.php/academics/admission/application-forms"
                          >Application Forms</a
                        >
                      </li>
                      <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                        <a href="https://admissions.dkut.ac.ke/"
                          >Apply Online</a
                        >
                      </li>
                      <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                        <a
                          href="https://www.dkut.ac.ke/index.php/academics/admission/admission-materials"
                          >Admission Materials</a
                        >
                      </li>
                      <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                        <a href="https://registration.dkut.ac.ke/"
                          >First Year Registration 2024/2025</a
                        >
                      </li>
                    </ul>
                  </div>
                  <!-- Programmes Section -->
                  <div>
                    <h3 class="font-bold text-green-800 mb-4">Programmes</h3>
                    <ul class="space-y-2">
                      <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                        <a
                          href="https://www.dkut.ac.ke/index.php/academics/programmes/postgraduate-programmes"
                          >Postgraduate Programmes</a
                        >
                      </li>
                      <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                        <a
                          href="https://www.dkut.ac.ke/index.php/academics/programmes/undergraduate-programmes"
                          >Undergraduate Programmes</a
                        >
                      </li>
                      <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                        <a
                          href="https://www.dkut.ac.ke/index.php/academics/programmes/diploma-and-certificate-programmes"
                          >Diploma and Certificate Programmes</a
                        >
                      </li>
                      <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                        <a
                          href="https://www.dkut.ac.ke/index.php/academics/programmes/professional-and-certification-courses"
                          >Professional and Certification Courses</a
                        >
                      </li>
                    </ul>
                  </div>
                  <!-- Schools & Institutes Section -->
                  <div>
                    <h3 class="font-bold text-green-800 mb-4">
                      <a
                        href="https://www.dkut.ac.ke/index.php/academics/schools-institutes"
                        >Schools & Institutes</a
                      >
                    </h3>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item text-white font-bold mr-2">
              <a href="./gallery.html">Gallery</a>
            </li>

            <li class="nav-item text-white font-bold mr-2">
              <a href="https://www.dkut.ac.ke/">University Website</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="bg-white py-10 px-5">

      <!-- Photo Gallery -->
      <div
        x-data="{ items: [
        'https://i.pinimg.com/474x/eb/33/ef/eb33ef74d68c4d375f7744c33309824a.jpg',
        'https://i.pinimg.com/474x/eb/33/ef/eb33ef74d68c4d375f7744c33309824a.jpg',
        'https://i.pinimg.com/474x/eb/33/ef/eb33ef74d68c4d375f7744c33309824a.jpg',
        'https://i.pinimg.com/474x/eb/33/ef/eb33ef74d68c4d375f7744c33309824a.jpg',
        'https://i.pinimg.com/474x/eb/33/ef/eb33ef74d68c4d375f7744c33309824a.jpg',
        'https://i.pinimg.com/474x/eb/33/ef/eb33ef74d68c4d375f7744c33309824a.jpg',
        'https://i.pinimg.com/474x/eb/33/ef/eb33ef74d68c4d375f7744c33309824a.jpg',
        'https://i.pinimg.com/474x/eb/33/ef/eb33ef74d68c4d375f7744c33309824a.jpg',
        'https://i.pinimg.com/474x/eb/33/ef/eb33ef74d68c4d375f7744c33309824a.jpg'
    ] }"
        class="flex flex-wrap gap-4 items-center justify-center"
      >
        <!-- Loop through items -->
        <template x-for="(item, index) in items" :key="index">
          <div class="w-full md:w-1/4">
            <div class="image-wrap-2 border shadow-lg">
              <img
                :src="item"
                alt="Gallery Image"
                class="img-fluid w-full h-auto rounded-t-lg"
              />
              <div class="image-info p-4 text-center">
                <h2 class="mb-3 font-bold text-lg text-gray-800">GALLERY</h2>
                <a
                  href="#"
                  class="bg-white text-black py-2 px-4 hover:bg-gray-100 transition"
                >
                  More Photos
                </a>
              </div>
            </div>
          </div>
        </template>
      </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-green-800 text-white text-center py-5">
      <p>
        &copy; 2024 Dedan Kimathi University of Technology. All rights reserved.
      </p>
      <div class="flex justify-center mt-4">
        <a href="#" class="text-white mx-2 text-2xl hover:text-gray-400"
          ><i class="fab fa-facebook"></i
        ></a>
        <a href="#" class="text-white mx-2 text-2xl hover:text-gray-400"
          ><i class="fab fa-twitter"></i
        ></a>
        <a href="#" class="text-white mx-2 text-2xl hover:text-gray-400"
          ><i class="fab fa-instagram"></i
        ></a>
        <a href="#" class="text-white mx-2 text-2xl hover:text-gray-400"
          ><i class="fab fa-linkedin"></i
        ></a>
      </div>
    </footer>
  </body>
</html>
