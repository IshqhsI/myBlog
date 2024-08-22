<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IshqCode Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js"
        integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .float {
            animation: float 6s ease-in-out infinite;
        }
        .hero-bg {
            background-image: url('{{ asset('images/bg-hero.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <header class="bg-white dark:bg-gray-800 shadow-lg" x-data="{ isOpen: false, isCategoriesOpen: false }">
        <nav class="max-w-7xl container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <a href="#" class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">IshqCode</a>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">Home</a>
                    <div class="relative group">
                        <button @mouseover="isCategoriesOpen = true"
                            class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">
                            Categories
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="isCategoriesOpen" @mouseover="isCategoriesOpen = true"
                            @mouseleave="isCategoriesOpen = false"
                            class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-lg overflow-hidden transition-opacity duration-300 opacity-0 group-hover:opacity-100 z-10">
                            <a href="#"
                                class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                                1</a>
                            <a href="#"
                                class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                                2</a>
                            <a href="#"
                                class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                                3</a>
                        </div>
                    </div>
                    <a href="#about"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">About</a>
                    <a href="#contact"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <form class="hidden md:flex flex-grow max-w-md">
                        <input type="text" placeholder="Search..."
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400">
                    </form>
                    <button id="darkModeToggle" aria-label="Toggle Dark Mode"
                        class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 transition duration-300 transform hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                    <button @click="isOpen = !isOpen" aria-label="Open/Close Menu" class="md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="md:hidden mt-3" x-show="isOpen" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95">
                <a href="#"
                    class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Home</a>
                <div class="relative">
                    <button @click="isCategoriesOpen = !isCategoriesOpen" aria-label="Toggle Categories"
                        class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">
                        Categories
                    </button>
                    <div x-show="isCategoriesOpen" @click.outside="isCategoriesOpen = false"
                        class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-lg overflow-hidden transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                        <a href="#"
                            class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                            1</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                            2</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                            3</a>
                    </div>
                </div>
                <a href="#about"
                    class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">About</a>
                <a href="#contact"
                    class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Contact</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-6">
        <!-- Hero Section -->
        <section class="relative hero-bg h-64 md:h-96 flex items-center justify-center text-center text-white mb-8">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative z-10 p-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Empowering Your Coding Journey</h1>
                <p class="text-lg md:text-xl mb-6">Dive into insightful articles and tutorials to enhance your coding
                    skills.</p>
                <a href="#newsletter"
                    class="bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-indigo-700 transition duration-300">Subscribe
                    Now</a>
            </div>
        </section>

        <!-- Featured Post -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden mb-12">
            <img src="https://via.placeholder.com/1200x600" alt="Featured Post" class="w-full h-64 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">The Future of Web Development</h2>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Explore the latest trends and technologies shaping the
                    future of web development. From AI-powered tools to new frameworks, we dive deep into what's next
                    for developers.</p>
                <a href="#"
                    class="mt-4 inline-block text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read
                    more →</a>
            </div>
        </div>

        <!-- Recent Posts Grid -->
        <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">Recent Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Post Card -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-95 transition duration-300">
                <img src="https://via.placeholder.com/400x200" alt="Post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">Getting Started with
                        Tailwind CSS</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Learn how to quickly set up and use Tailwind CSS
                        in your projects. Discover its utility-first approach and how it can streamline your development
                        workflow.</p>
                    <a href="#"
                        class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read
                        more →</a>
                </div>
            </div>
            <!-- Post Card -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-95 transition duration-300">
                <img src="https://via.placeholder.com/400x200" alt="Post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">Understanding JavaScript
                        Closures</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Explore the concept of closures in JavaScript, a
                        powerful feature that allows functions to access variables from their parent scope, even after
                        the parent function has finished executing.</p>
                    <a href="#"
                        class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read
                        more →</a>
                </div>
            </div>
            <!-- Post Card -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-95 transition duration-300">
                <img src="https://via.placeholder.com/400x200" alt="Post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">A Guide to Modern CSS Grid
                        Layout</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Learn the ins and outs of CSS Grid Layout, a
                        powerful tool for creating complex and responsive grid-based layouts with ease. Discover
                        practical examples and tips to enhance your designs.</p>
                    <a href="#"
                        class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read
                        more →</a>
                </div>
            </div>
        </div>

        <!-- Newsletter Signup -->
        <div
            class="bg-gradient-to-r from-indigo-800 to-purple-900 rounded-2xl shadow-2xl p-10 mt-16 transform hover:scale-y-100 transition duration-300 mb-12" id="newsletter">
            <h2 class="text-2xl font-bold mb-4 text-white">Subscribe to Our Newsletter</h2>
            <p class="text-white mb-6">Stay up-to-date with our latest articles and tech news. No spam, unsubscribe
                anytime.</p>
            <form class="flex flex-col sm:flex-row">
                <input type="email" placeholder="Enter your email"
                    class="flex-grow px-4 py-3 mb-2 sm:mb-0 sm:rounded-l-lg rounded-lg sm:rounded-r-none focus:outline-none focus:ring-2 focus:ring-indigo-600 text-gray-800 dark:text-gray-200">
                <button type="submit"
                    class="bg-indigo-800 text-white px-6 py-3 rounded-lg sm:rounded-l-none hover:bg-indigo-700 transition duration-300 transform hover:scale-95">Subscribe</button>
            </form>
        </div>

        <!-- About Me -->
        <section
            class="bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 rounded-lg shadow-lg p-8 mb-12 border-t-4 border-indigo-600" id="about">
            <div class="max-w-4xl mx-auto">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">About Me</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400">Hi there! I'm [Your Name], the creator behind
                        IshqCode. Welcome to my little corner of the internet where I share my passion for technology,
                        coding, and all things digital.</p>
                </div>
                <!-- Profile Image and Bio -->
                <div class="flex flex-col lg:flex-row items-center lg:items-start">
                    <!-- Profile Image -->
                    <div class="lg:w-1/3 mb-6 lg:mb-0">
                        <img src="https://via.placeholder.com/300x300" alt="Profile Picture"
                            class="w-48 h-48 rounded-full mx-auto lg:mx-0 shadow-lg">
                    </div>
                    <!-- Biography -->
                    <div class="lg:w-2/3 lg:pl-8">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-4">A Little Bit About Me
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">I’ve been passionate about technology and
                            coding for as long as I can remember. With a background in [Your Background], I’ve turned
                            this passion into a journey of learning and sharing. Here on IshqCode, you’ll find articles,
                            tutorials, and insights that I hope will inspire and help you in your own tech journey.</p>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">When I’m not coding, you’ll find me [mention a
                            personal hobby or interest], exploring new tech trends, or spending time with my
                            [family/pets/friends]. I believe in continuous learning and strive to share my knowledge
                            with the community through this blog.</p>
                        <p class="text-gray-600 dark:text-gray-400">Feel free to reach out if you have any questions,
                            suggestions, or just want to chat about tech. I love connecting with fellow enthusiasts and
                            am always up for a good discussion!</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section
            class="bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 rounded-lg shadow-lg p-8 mb-12 border-t-4 border-indigo-600" id="contact">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">Contact Me</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400">I’d love to hear from you! Whether you have
                        questions, feedback, or just want to say hello, feel free to reach out using the form below.
                        I'll do my best to get back to you as soon as possible.</p>
                </div>
                <div class="flex flex-col lg:flex-row lg:space-x-6">
                    <!-- Contact Form -->
                    <div class="lg:w-full">
                        <form action="#" method="POST" class="space-y-6">
                            <div>
                                <label for="name"
                                    class="block text-gray-800 dark:text-gray-100 font-semibold mb-2">Your Name</label>
                                <input type="text" id="name" name="name" placeholder="John Doe"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 transition duration-300">
                            </div>
                            <div>
                                <label for="email"
                                    class="block text-gray-800 dark:text-gray-100 font-semibold mb-2">Your
                                    Email</label>
                                <input type="email" id="email" name="email" placeholder="you@example.com"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 transition duration-300">
                            </div>
                            <div>
                                <label for="message"
                                    class="block text-gray-800 dark:text-gray-100 font-semibold mb-2">Your
                                    Message</label>
                                <textarea id="message" name="message" placeholder="Write your message here..." rows="6"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 transition duration-300"></textarea>
                            </div>
                            <div>
                                <button type="submit"
                                    class="bg-indigo-800 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition duration-300 transform hover:scale-95">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('layouts.footer')

    <script>
        document.getElementById('darkModeToggle').addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
        });
    </script>
</body>

</html>
