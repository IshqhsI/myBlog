@extends('layouts.main')

@section('content')
    <main class="container mx-auto p-4 px-0 h-10" style="height: calc(100vh - 132px)">
        <section
            class="bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 rounded-lg shadow-lg p-8 border-b-4 border-t-4 border-indigo-600 mb-3 md:mx-6"
            id="about">
            <div class="max-w-4xl mx-auto">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">About Me</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400">Hi there! I'm Muhammad Ridhwan, the creator behind
                        IshqCode. Welcome to my little corner of the internet where I share my passion for technology,
                        coding, and all things digital.</p>
                </div>
                <!-- Profile Image and Bio -->
                <div class="flex flex-col lg:flex-row items-center lg:items-start">
                    <!-- Profile Image -->
                    <div class="lg:w-1/3 mb-6 lg:mb-0">
                        <img src="https://i.seadn.io/s/raw/files/0c181730d84187ec50714fda10051e65.png?auto=format&dpr=1&w=1000"
                            alt="Profile Picture" class="w-48 h-48 rounded-full mx-auto lg:mx-0 shadow-lg">
                    </div>
                    <!-- Biography -->
                    <div class="lg:w-2/3 lg:pl-8">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-4">A Little Bit About Me
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            I’ve been passionate about technology and coding for as long as I can remember. With a
                            background in software engineering and web development, I’ve turned this passion into a journey
                            of learning and sharing. Here on IshqCode, you’ll find articles, tutorials, and insights that I
                            hope will inspire and help you in your own tech journey.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            When I’m not coding, you’ll find me hiking in the mountains, exploring new tech trends, or
                            spending time with my family. I believe in continuous learning and strive to share my knowledge
                            with the community through this blog.
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">
                            Feel free to reach out if you have any questions, suggestions, or just want to chat about tech.
                            I love connecting with fellow enthusiasts and am always up for a good discussion!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="relative lg:hidden">
            @include('layouts.footer')
        </div>
    </main>
    <div class="hidden lg:block">
        @include('layouts.footer')
    </div>
@endsection
