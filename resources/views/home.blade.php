@extends('layouts.main')
@section('content')
    <main class="container mx-auto">
        <!-- Hero Section -->
        <section class="relative hero-bg h-96 md:h-96 flex items-center justify-center text-center text-white mb-8">
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
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden mb-12 mx-4 md:mx-6">
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

        <div class="mb-8 md:mx-6">
            <div class="flex border-b border-gray-300 dark:border-gray-600">
                <button id="all"
                    class="tab-button py-2 px-4 text-sm font-medium border-b-2 border-transparent focus:outline-none transition duration-300">All</button>
                <button id="web-development"
                    class="tab-button py-2 px-4 text-sm font-medium border-b-2 border-transparent focus:outline-none transition duration-300">Web
                    Development</button>
                <button id="javascript"
                    class="tab-button py-2 px-4 text-sm font-medium border-b-2 border-transparent focus:outline-none transition duration-300">JavaScript</button>
                <button id="css"
                    class="tab-button py-2 px-4 text-sm font-medium border-b-2 border-transparent focus:outline-none transition duration-300">CSS</button>
            </div>
        </div>

        <!-- Recent Posts Grid -->
        <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100 mx-4 md:mx-6">Recent Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mx-4 md:mx-6">
            <!-- Post Card -->
            <div class="post-card bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105"
                data-category="web-development">
                <img src="https://via.placeholder.com/400x200" alt="Post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">Getting Started with Tailwind
                        CSS</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Learn how to quickly set up and use Tailwind CSS in
                        your projects. Discover its utility-first approach and how it can streamline your development
                        workflow.</p>
                    <a href="#"
                        class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read
                        more →</a>
                </div>
            </div>
            <!-- Post Card -->
            <div class="post-card bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105"
                data-category="javascript">
                <img src="https://via.placeholder.com/400x200" alt="Post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">Understanding JavaScript
                        Closures</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Explore the concept of closures in JavaScript, a
                        powerful feature that allows functions to access variables from their parent scope, even after the
                        parent function has finished executing.</p>
                    <a href="#"
                        class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read
                        more →</a>
                </div>
            </div>
            <!-- Post Card -->
            <div class="post-card bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105"
                data-category="css">
                <img src="https://via.placeholder.com/400x200" alt="Post image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">A Guide to Modern CSS Grid
                        Layout</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Learn the ins and outs of CSS Grid Layout, a powerful
                        tool for creating complex and responsive grid-based layouts with ease. Discover practical examples
                        and tips to enhance your designs.</p>
                    <a href="#"
                        class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read
                        more →</a>
                </div>
            </div>
        </div>

        <!-- Newsletter Signup -->
        <div class="bg-gradient-to-r from-indigo-800 to-purple-900 rounded-2xl shadow-2xl p-10 mt-16 transform hover:scale-y-100 transition duration-300 mb-12 mx-4 md:mx-6"
            id="newsletter">
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
    </main>

    @include('layouts.footer')

    <script>
        document.getElementById('darkModeToggle').addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
        });

        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
                const category = button.id;
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove(
                    'border-indigo-600', 'text-indigo-600'));
                button.classList.add('border-indigo-600', 'text-indigo-600');
                document.querySelectorAll('.post-card').forEach(post => {
                    if (category === 'all' || post.dataset.category === category) {
                        post.style.display = 'block';
                    } else {
                        post.style.display = 'none';
                    }
                });
            });
        });

        // Initialize with 'all' posts
        document.getElementById('all').click();
    </script>
@endsection
