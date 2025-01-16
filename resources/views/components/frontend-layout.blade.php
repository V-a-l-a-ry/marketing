<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marketing Department</title>
    <!-- Tailwind CSS CDN -->
    @vite('resources/css/app.css')
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Agu+Display&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/home.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
</head>

<body class="text-gray-800 font-sans">
    <header class="bg-green-800 text-white flex items-center justify-center">
        <img src="https://admissions.dkut.ac.ke/images/logo.png" class="h-16 py-2 mr-3" />
    </header>

    <!-- Navigation Menu -->
    <nav class="sticky top-0 z-20 md:py-12 text-green-800 bg-white">
        <ul class="flex items-center justify-center gap-6">
            <li class="nav-item font-bold mr-2">
                <a href="{{ url('/') }}">Home</a>
            </li>

            <!-- Academics Dropdown -->
            <li class="relative" x-data="{ open: false }">
                <button class="nav-item font-bold flex items-center group mr-2 cursor-pointer" @click="open = !open">
                    Academics
                </button>
                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="absolute left-0 top-full bg-white border border-gray-200 shadow-md mt-2 py-6 px-8 z-50 w-max">
                    <div class="flex gap-12 text-green-800">
                        <!-- Admission Section -->
                        <div class="text-green-800">
                            <h3 class="font-bold text-green-800 mb-4">Admission</h3>
                            <ul class="space-y-2 text-green-800">
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a
                                        href="https://www.dkut.ac.ke/index.php/academics/admission/application-procedure">Application
                                        Procedure</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a href="https://www.dkut.ac.ke/index.php/academics/admission/application-forms">Application
                                        Forms</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a href="https://admissions.dkut.ac.ke/">Apply Online</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a href="https://www.dkut.ac.ke/index.php/academics/admission/admission-materials">Admission
                                        Materials</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a href="https://registration.dkut.ac.ke/">First Year Registration 2024/2025</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Programmes Section -->
                        <div>
                            <h3 class="font-bold text-green-800 mb-4">Programmes</h3>
                            <ul class="space-y-2">
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a
                                        href="https://www.dkut.ac.ke/index.php/academics/programmes/postgraduate-programmes">Postgraduate
                                        Programmes</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a
                                        href="https://www.dkut.ac.ke/index.php/academics/programmes/undergraduate-programmes">Undergraduate
                                        Programmes</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a
                                        href="https://www.dkut.ac.ke/index.php/academics/programmes/diploma-and-certificate-programmes">Diploma
                                        and Certificate Programmes</a>
                                </li>
                                <li class="px-2 py-1 hover:bg-gray-100 cursor-pointer">
                                    <a
                                        href="https://www.dkut.ac.ke/index.php/academics/programmes/professional-and-certification-courses">Professional
                                        and Certification Courses</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Schools & Institutes Section -->
                        <div>
                            <h3 class="font-bold text-green-800 mb-4">
                                <a href="https://www.dkut.ac.ke/index.php/academics/schools-institutes">Schools &
                                    Institutes</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </li>


            <li class="nav-item font-bold mr-2">
                <a href="/exhibits">Gallery</a>
            </li>

            <li class="nav-item font-bold mr-2">
                <a href="/newsletters">Newsletters</a>
            </li>

            <li class="nav-item font-bold mr-2">
                <a href="https://www.dkut.ac.ke/">University Website</a>
            </li>
        </ul>
    </nav>

    {{ $slot }}

    <footer class="bg-green-900 text-white text-center p-6">
        <p>
            &copy; 2024 Dedan Kimathi University of Technology. All rights reserved.
        </p>
        <div class="mt-4">
            <h3 class="mb-2 text-lg">Follow Us:</h3>
            <div class="space-x-4">
                <a href="#" class="text-white hover:text-gray-300 text-xl"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white hover:text-gray-300 text-xl"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white hover:text-gray-300 text-xl"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white hover:text-gray-300 text-xl"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" defer></script>
    @vite('resources/js/app.js')
</body>

</html>
