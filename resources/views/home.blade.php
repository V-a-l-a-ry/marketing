<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marketing Department</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
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

<body class="bg-gray-100 text-gray-800 font-sans bg-auto bg-center" style="font-family:'Josefin Sans', sans-serif;">



    <header class="bg-green-800 text-white flex items-center justify-center">
        <img src="./img/dekutlogo.png" class="w-12 mr-3" />
        <div>
            <div class="text-center">Dedan Kimathi University of Technology</div>
        </div>
    </header>

    <!-- Navigation Menu -->
    <nav class="sticky top-0 md:py-6 text-green-800 bg-white">
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
                    <div class="flex gap-12">
                        <!-- Admission Section -->
                        <div>
                            <h3 class="font-bold text-green-800 mb-4">Admission</h3>
                            <ul class="space-y-2">
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
                <a href="{{ route('galleries.index') }}">Gallery</a>
            </li>

            <li class="nav-item font-bold mr-2">
                <a href="{{ route('newsletter') }}">Newsletters</a>
            </li>

            <li class="nav-item font-bold mr-2">
                <a href="https://www.dkut.ac.ke/">University Website</a>
            </li>
        </ul>
    </nav>
    <div class="hero bg-cover h-screen md:h-[650px] bg-center text-white text-center py-36 flex flex-col justify-center"
        style="
        background-image: url('https://i.pinimg.com/736x/bf/1d/df/bf1ddf5a001515cfeb53f7f02879703e.jpg');
      ">
        <div class="w-5/6 mx-auto">
            <h1 class="md:text-8xl md:w-5/6 mx-auto sm:text-4xl text-2xl font-bold text-left md:px-6">
                Welcome to Marketing Department
            </h1>
            <p class="font-bold md:w-5/6 mx-auto md:text-4xl text-lg underline text-left mt-4 md:px-6">
                Your journey starts here
            </p>
        </div>

    </div>

    <!-- CTA section -->
    <div class="py-16 bg-green-800 text-white text-center bg-center bg-auto">

        <h2 class="text-6xl font-bold py-12">"Join the Circle of Visionaries — Where You Truly Belong."</h2>
        <p class="font-semibold text-xl pb-10">
            Join our community that is focused on the future of technology - today,
            tomorrow, and forever
        </p>
        <div class="py-4 flex gap-8 md:flex-row flex-col items-center justify-center">
            <p
                class="border font-bold border-white hover:bg-white hover:text-green-800 transition-all px-3 md:px-10 py-3 text-xl mr-2">
                <a href="#">Plan a Visit <i class="fa-solid fa-angle-right"></i></a>
            </p>
            <p
                class="border font-bold hover:bg-white hover:text-green-800 transition-all border-white px-3 md:px-10 py-3 text-xl mr-2">
                <a href="#">Join Us! <i class="fa-solid fa-angle-right"></i></a>
            </p>
            <p
                class="border font-bold hover:bg-white hover:text-green-800 transition-all border-white px-3 md:px-10 py-3 text-xl mr-2">
                <a href="./newsletter.html">Newsletters <i class="fa-solid fa-angle-right"></i></a>
            </p>
        </div>
    </div>

    <!-- Mentorships section -->
    <section class="md:w-3/4 mx-auto mt-10">
        <div class="flex flex-col md:flex-row md:gap-8">
            <div class="mx-auto space-y-6 my-10 w-1/2">
                <h2 class="text-green-800 font-bold text-4xl">
                    DeKUT is more than certificates.
                </h2>
                <p class="">
                    At DeKUT (Dedan Kimathi University of Technology), we believe
                    education is more than just earning a certificate—it's about shaping
                    a future of innovation, leadership, and real-world impact. Our
                    programs emphasize practical skills, creativity, and critical
                    thinking, ensuring our graduates are prepared to excel in today's
                    competitive landscape. At DeKUT, education is a transformative
                    journey, not just a destination.
                </p>
            </div>

            <div class="shadow-lg mx-auto hidden md:block my-10 w-1/2">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/1Y9X3dZMYZk?si=QjFa61fhcwMi1ThF" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

        <div class="mx-auto flex flex-col md:flex-row md:gap-8">
            <div class="w-1/2 flex flex-col lg:flex-row gap-4">
                <div
                    class="shadow-lg p-3 w-1/2 md:flex hidden lg:block md:flex-col bg-green-800 text-white text-center font-bold md:text-4xl md:items-center md:justify-center h-full">
                    6th
                    <p class="text-white text-sm font-semibold py-4">
                        Among universities in Kenya based on a meta-ranking aggregation
                    </p>
                </div>

                <div
                    class="shadow-lg w-1/2 p-3 md:flex hidden lg:block md:flex-col bg-yellow-400 text-white text-center md:text-4xl md:items-center md:justify-center h-full">
                    <p class="font-semibold">approx. 7,000 students​</p>
                    <p class="text-white text-sm py-4 font-semibold">
                        Dedan Kimathi University of Technology (DeKUT) stands out as a hub of academic excellence and
                        innovation in Kenya. Ranked 6th nationally and boasting an impressive global ranking of **#1124
                        in Natural Sciences** (specifically in Earth and Environmental Science) according to the *Nature

                    </p>
                </div>
            </div>

            <div class="shadow-lg mx-auto border border-red-600 p-4 space-y-4 w-1/2">
                <h3 class="text-2xl font-bold text-green-800">
                    How much do you know about our Campus?
                </h3>
                <p class="">
                    Dedan Kimathi University of Technology (DeKUT) is a leading public institution in Kenya, renowned
                    for its commitment to quality education, innovation, and technological advancement. Located in Nyeri
                    County, DeKUT offers a vibrant academic environment surrounded by the serene landscapes of Central
                    Kenya.
                </p>

                <div class="flex md:flex-row flex-col gap-4 items-center justify-center">
                    <button
                        class="px-3 py-6 bg-green-800 text-white font-bold hover:bg-yellow-400 hover:border hover:border-green-800 hover:text-green-800">
                        More About DeKUT <i class="fa-solid fa-angle-right"></i>
                    </button>
                    {{-- <button class="px-3 py-6 bg-green-800 text-white font-bold hover:bg-white hover:text-green-800">
                        More About DeKUT <i class="fa-solid fa-angle-right"></i>
                    </button> --}}
                </div>
            </div>
        </div>

        <div class="mx-auto shadow-lg flex flex-col space-y-4 md:flex-row md:gap-8 mt-10">
            <div class="mx-auto w-1/2 p-8 h-80 text-white flex items-center justify-center flex-col bg-yellow-400">
                <h3 class="text-3xl text-center font-bold p-4">CAMPUS VISITS</h3>

                <p class="px-4 text-justify mb-4">
                    High school students visit our campus for a guided tour. They
                    explore labs, interact with lecturers, and learn about our courses.
                    These visits are led by our Marketing Champions, and we ensure that
                    students gain valuable insights into university life and academic
                    opportunities.
                </p>
            </div>

            <div class="mx-auto shadow-lg w-1/2 bg-green-400 flex flex-col items center justify-center">
                <h3 class="text-3xl font-bold text-center p-4">SCHOOL OUTREACHS</h3>
                <p class="px-4 text-justify">
                    Our Marketing Champions visit high schools to motivate students,
                    share their journey, and guide them on courses offered at our
                    university. We organize motivational talks, career guidance
                    workshops, and Q&A sessions to help students make informed decisions
                    about their future careers.
                </p>
            </div>
        </div>
    </section>

    <section class="shadow-lg md:w-3/4 mx-auto mt-10 p-10 bg-green-800 flex items-center flex-col">
        <h2 class="text-white text-4xl font-bold md:p-8 p-4 text-center">
            Education for the Bold and Drive. <br />
            Innovate, Achieve, Excel
        </h2>
        <p class="text-white text-center w-3/4 mx-auto p-4">
            At DeKUT, we believe that education is not just about gaining knowledge;
            it’s about creating leaders, innovators, and change-makers who redefine
            success. Our commitment to excellence empowers students with the skills,
            confidence, and creativity to shape their future and impact the world.
            With state-of-the-art facilities and a focus on research, innovation,
            and holistic growth, DeKUT ensures you don't just earn a degree—you
            embark on a transformative journey towards unparalleled success.
        </p>

        <button class="bg-green-400 text-green-800 hover:bg-white px-8 py-3 text-xl mt-6 font-semibold transition-all">
            Our Luminaries <i class="fa-solid fa-angle-right"></i>
        </button>
        <p class="text-sm font-semibold text-white mt-4 pb-8">
            View the list our academic pride
        </p>
    </section>

    <section class="shadow-lg md:w-3/4 mx-auto mt-12 bg-white">
        <div class="text-center py-8 space-y-6 text-green-600">
            <h3 class="text-3xl font-bold">Experience DeKUT Marketing</h3>
            <p class="w-3/4 mx-auto">
                The marketing team at DeKUT is a dynamic group of professionals
                dedicated to showcasing the university's excellence, innovation, and
                community impact. With a strategic focus on creativity, research-based
                promotion, and audience engagement, they ensure the institution's
                values and achievements resonate locally and globally.
            </p>
        </div>

        <div class="border border-green-800 w-10/12 mx-auto bg-white text-green-800 mt-20">
            <h3 class="-mt-6 mb-10 w-1/3 mx-auto text-white bg-green-800 px-8 py-4 md:text-2xl font-bold text-center">
                OUR CHAMPIONS
            </h3>
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-green-600 text-2xl font-bold mb-6">
                    About the Marketing Student Volunteer Program
                </h2>
                <p class="mb-4">
                    In collaboration with the Dedan Kimathi University of Technology's
                    Marketing Department, the Marketing Students Association has
                    established a volunteer program that has significantly boosted
                    participation and skill development within the club.
                </p>
                <p class="mb-4">
                    For the period December 2023 - October 2024, the initiative
                    successfully engaged 50 volunteers, providing them with valuable
                    practical experience in marketing. This program not only equipped
                    participants with essential marketing skills but also attracted
                    students from various disciplines, fostering a diverse and inclusive
                    learning environment.
                </p>
                <p>
                    In our efforts to foster a culture of mentorship and professional
                    development, the Marketing Students Association of DeKUT has
                    implemented a range of strategic measures and activities aimed at
                    increasing participation in our mentorship club. Recognizing the
                    importance of nurturing young marketers, we have actively sought to
                    create an engaging, value-driven environment that attracts and
                    retains members.
                </p>
            </div>

            <!-- Club Info Section -->
            <section class="shadow-lg py-10 px-6 text-center bg-white">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-green-600 text-2xl font-bold mb-6">
                        About the Marketing Students Association
                    </h2>
                    <p class="mb-4">
                        The Marketing Students Association of Dedan Kimathi University of
                        Technology is a dynamic and award-winning club that serves as a
                        hub for students passionate about marketing and those keen on
                        expanding their knowledge in the field.
                    </p>
                    <p>
                        Officially registered under the Marketing Society of Kenya, the
                        association fosters a community of like-minded individuals and
                        offers a range of strategic measures and activities aimed at
                        increasing participation and professional development in its
                        mentorship programs.
                    </p>
                </div>
                <div class="-mb-16">
                    <button
                        class="mt-10 text-xl bg-green-800 text-white font-bold px-6 py-3 hover:text-green-800 hover:bg-green-400 transition-all">
                        Join Us to Find Your Future Experiences!
                    </button>
                </div>
            </section>
        </div>
    </section>

    <!-- Contact Section -->
    <div class="mx-auto my-12 md:w-5/6 px-4 grid md:grid-cols-2 gap-6">
        <!-- Contact Info -->
        <div class="bg-green-700 text-white p-6 shadow">
            <h2 class="text-2xl font-bold mb-4">
                Reach us through our social media platforms:
            </h2>
            <p class="mb-4">
                <span class="font-bold">📞 Contact:</span> +254 713123021
            </p>
            <div class="flex justify-evenly space-x-4">
                <a href="#" class="text-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/3955/3955024.png" alt="Instagram"
                        class="w-12 h-12 border-2 border-white mb-2 transition-transform transform hover:scale-110" />
                    <span>Instagram</span>
                </a>
                <a href="#" class="text-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/5968/5968830.png" alt="Twitter"
                        class="w-12 h-12 border-2 border-white mb-2 transition-transform transform hover:scale-110" />
                    <span>Twitter</span>
                </a>
                <a href="#" class="text-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/1051/1051309.png" alt="Facebook"
                        class="w-12 h-12 border-2 border-white mb-2 transition-transform transform hover:scale-110" />
                    <span>Facebook</span>
                </a>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white p-6 shadow">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Get in Touch</h2>
            <form action="mailto:marketing@dkut.ac.ke" method="post" class="space-y-4">
                <input type="text" placeholder="Your Name" required
                    class="w-full border border-gray-300 px-4 py-2 focus:ring focus:ring-green-400" />
                <input type="email" placeholder="Your Email" required
                    class="w-full border border-gray-300 px-4 py-2 focus:ring focus:ring-green-400" />
                <textarea placeholder="Type your message here..." rows="5" required
                    class="w-full border border-gray-300 px-4 py-2 focus:ring focus:ring-green-400"></textarea>
                <button type="submit" class="w-full bg-green-700 text-white py-2 hover:bg-green-800 transition">
                    Send
                </button>
            </form>
        </div>
    </div>

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
</body>

</html>
