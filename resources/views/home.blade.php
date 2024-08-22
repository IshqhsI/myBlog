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
    {{-- <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                },
            },
        }
    </script> --}}
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
    </style>
</head>

<body
    class="bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 text-gray-800 dark:text-gray-200 transition-colors duration-300">
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
                    <a href="#"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">About</a>
                    <a href="#"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <form class="hidden md:flex flex-grow max-w-md">
                        <input type="text" placeholder="Search..."
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400">
                    </form>
                    <button id="darkModeToggle"
                        class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 transition duration-300 transform hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                    <button @click="isOpen = !isOpen" class="md:hidden">
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
                    <button @click="isCategoriesOpen = !isCategoriesOpen"
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
                <a href="#"
                    class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">About</a>
                <a href="#"
                    class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Contact</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-12">
        <h1
            class="text-3xl md:text-4xl font-bold text-center mb-12 bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 to-purple-600">
            Welcome to IshqCode Blog</h1>

        <!-- Featured Post -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden mb-8">
            <div class="md:flex">
                <img src="https://via.placeholder.com/400x250" alt="Featured post image" class="w-full md:w-1/3 h-64 object-cover">
                <div class="p-6">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Featured</div>
                    <h2 class="mt-2 text-xl font-semibold">The Future of Web Development</h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">Explore the latest trends and technologies shaping the future of web development. From AI-powered tools to new frameworks, we dive deep into what's next for developers.</p>
                    <a href="#" class="mt-4 inline-block text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read more →</a>
                </div>
            </div>
        </div>

        <!-- Recent Posts Grid -->
        <h2 class="text-2xl font-bold mb-6">Recent Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Post Card -->
            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-95 transition duration-300">
                <img src="https://via.placeholder.com/400x200" alt="Post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Getting Started with Tailwind CSS</h3>
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
                    <h3 class="text-xl font-semibold mb-2">Understanding JavaScript Closures</h3>
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
                    <h3 class="text-xl font-semibold mb-2">A Guide to Modern CSS Grid Layout</h3>
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
            class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl shadow-2xl p-10 mt-16 transform hover:scale-y-100 transition duration-300">
            <h2 class="text-2xl font-bold mb-4 text-white">Subscribe to Our Newsletter</h2>
            <p class="text-white mb-6">Stay up-to-date with our latest articles and tech news. No spam, unsubscribe
                anytime.</p>
            <form class="flex flex-col sm:flex-row">
                <input type="email" placeholder="Enter your email"
                    class="flex-grow px-4 py-3 mb-2 sm:mb-0 sm:rounded-l-lg rounded-lg sm:rounded-r-none focus:outline-none focus:ring-2 focus:ring-indigo-600 text-gray-800">
                <button type="submit"
                    class="bg-indigo-800 text-white px-6 py-3 rounded-lg sm:rounded-l-none hover:bg-indigo-700 transition duration-300 transform hover:scale-95">Subscribe</button>
            </form>
        </div>
    </main>

    @include('layouts.footer')

    <script>
        // Dark mode toggle script
        document.getElementById('darkModeToggle').addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
        });
    </script>
</body>

</html>
