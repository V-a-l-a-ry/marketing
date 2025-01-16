<x-frontend-layout>

    <div class="hero bg-cover h-screen md:h-[650px] bg-center text-white text-center py-36 flex flex-col justify-center"
        style="
    background-image: url('https://i.pinimg.com/736x/bf/1d/df/bf1ddf5a001515cfeb53f7f02879703e.jpg');
  ">
        <div class="w-5/6 mx-auto">
            <h1 class="animate-move md:text-8xl md:w-5/6 mx-auto sm:text-4xl text-2xl font-bold text-left md:px-6">
                Welcome to Marketing Office,
            </h1>
            <p class="font-bold md:w-5/6 mx-auto md:text-4xl text-lg underline text-left mt-4 md:px-6">
                Dedan KImathi University of Technology.
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
                class="border rounded-xl font-bold border-white hover:bg-white hover:text-green-800 transition-all px-3 md:px-10 py-3 text-xl mr-2">
                <a href="mailto:marketing@dkut.ac.ke?subject=Contact Us&body=Please write your message here."
                    class="flex items-center">
                    Contact Us <i class="fa-solid fa-angle-right"></i>
                </a>
            </p>

            <p
                class="border rounded-xl font-bold hover:bg-white hover:text-green-800 transition-all border-white px-3 md:px-10 py-3 text-xl mr-2">
                <a href="/infohub">Infohub <i class="fa-solid fa-angle-right"></i></a>
            </p>
            <p
                class="border rounded-xl font-bold hover:bg-white hover:text-green-800 transition-all border-white px-3 md:px-10 py-3 text-xl mr-2">
                <a href="/newsletters">Newsletters <i class="fa-solid fa-angle-right"></i></a>
            </p>
        </div>
    </div>

    <!-- Mentorships section -->
    <section class="md:w-3/4 mx-auto mt-10 rounded-xl bg-white md:p-6 p-3">
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

            <div class="shadow-lg mx-auto rounded-xl hidden md:block my-10 w-1/2">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/1Y9X3dZMYZk?si=QjFa61fhcwMi1ThF" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

        <div class="mx-auto flex flex-col md:flex-row md:gap-8">
            <div class="w-1/2 flex flex-col lg:flex-row gap-4">
                <div
                    class="shadow-lg p-3 w-1/2 md:flex hidden rounded-xl lg:block md:flex-col bg-green-800 text-white text-center font-bold md:text-4xl md:items-center md:justify-center h-full">
                    6th
                    <p class="text-white text-sm font-semibold py-4">
                        Among universities in Kenya based on a meta-ranking aggregation
                    </p>
                </div>

                <div
                    class="shadow-lg w-1/2 p-3 md:flex hidden rounded-xl lg:block md:flex-col bg-yellow-400 text-white text-center md:text-4xl md:items-center md:justify-center h-full">
                    <p class="font-semibold">approx. 7,000 students​</p>
                    <p class="text-white text-sm py-4 font-semibold">
                        Dedan Kimathi University of Technology (DeKUT) stands out as a hub of academic excellence and
                        innovation in Kenya. Ranked 6th nationally and boasting an impressive global ranking of **#1124
                        in Natural Sciences** (specifically in Earth and Environmental Science) according to the *Nature

                    </p>
                </div>
            </div>

            <div class="shadow-lg rounded-xl mx-auto border border-red-600 p-4 space-y-4 w-1/2">
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
                    {{-- <button
                        class="px-3 py-6 rounded-xl bg-green-800 text-white font-bold hover:bg-yellow-400 hover:border hover:border-green-800 hover:text-green-800">
                        More About DeKUT <i class="fa-solid fa-angle-right"></i>
                    </button> --}}
                    {{-- <button class="px-3 py-6 bg-green-800 text-white font-bold hover:bg-white hover:text-green-800">
                    More About DeKUT <i class="fa-solid fa-angle-right"></i>
                </button> --}}
                </div>
            </div>
        </div>

        <div class="mx-auto shadow-lg flex flex-col space-y-4 md:flex-row md:gap-8 mt-10">
            <div
                class="mx-auto rounded-xl w-1/2 p-8 h-80 text-white flex items-center justify-center flex-col bg-yellow-400">
                <h3 class="text-3xl text-center font-bold p-4">CAMPUS VISITS</h3>

                <p class="px-4 text-justify mb-4">
                    High school students visit our campus for a guided tour. They
                    explore labs, interact with lecturers, and learn about our courses.
                    These visits are led by our Marketing Champions, and we ensure that
                    students gain valuable insights into university life and academic
                    opportunities.
                </p>
            </div>

            <div class="mx-auto rounded-xl shadow-lg w-1/2 bg-green-400 flex flex-col items center justify-center">
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

    <section class="shadow-lg mx-auto mt-10  py-20 bg-green-800 flex items-center flex-col">
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

        {{-- <button
        class="bg-green-400 rounded-xl text-green-800 hover:bg-white px-8 py-3 text-xl mt-6 font-semibold transition-all">
        Our Luminaries <i class="fa-solid fa-angle-right"></i>
    </button>
    <p class="text-sm font-semibold text-white mt-4 pb-8">
        View the list our academic pride
    </p> --}}
    </section>

    <section class="shadow-lg md:w-3/4 mx-auto mt-12 mb-16 rounded-xl bg-white">
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

        <div class="border rounded-xl border-green-800 w-10/12 mx-auto bg-white text-green-800 mt-20">
            <h3
                class="-mt-6 mb-10 w-1/3 rounded-xl mx-auto text-white bg-green-800 px-8 py-4 md:text-2xl font-bold text-center">
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
                        class="mt-10 text-xl rounded-xl bg-green-800 text-white font-bold px-6 py-3 hover:text-green-800 hover:bg-green-400 transition-all">
                        Join Us to Find Your Future Experiences!
                    </button>
                </div>
            </section>
        </div>
    </section>




</x-frontend-layout>
