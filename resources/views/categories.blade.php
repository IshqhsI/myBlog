@extends('layouts.main')

@section('content')
    <main class="mx-auto py-2 lg:py-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content Column (75%) -->
            <div class="lg:w-3/4 px-4 py-4 lg:px-2 lg:pr-0">
                <!-- Introduction Section -->
                <section class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-8">
                    <div class="p-6">
                        <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100 mb-4">Categories</h1>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Explore our diverse categories and find content
                            tailored to your interests.</p>
                    </div>
                </section>

                <!-- Category Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Category Card 1 -->
                    <div class="">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://via.placeholder.com/400x200" alt="Category 1 Image"
                                class="w-full h-40 object-cover">
                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">Category 1</h2>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">A brief description of what Category 1
                                    covers. Explore articles and posts related to this topic.</p>
                                <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Explore
                                    Category</a>
                            </div>
                        </div>
                    </div>

                    <!-- Category Card 2 -->
                    <div class="w-full">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://via.placeholder.com/400x200" alt="Category 2 Image"
                                class="w-full h-40 object-cover">
                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">Category 2</h2>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">A brief description of what Category 2
                                    covers. Explore articles and posts related to this topic.</p>
                                <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Explore
                                    Category</a>
                            </div>
                        </div>
                    </div>

                    <!-- Category Card 3 -->
                    <div class="w-full">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://via.placeholder.com/400x200" alt="Category 3 Image"
                                class="w-full h-40 object-cover">
                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">Category 3</h2>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">A brief description of what Category 3
                                    covers. Explore articles and posts related to this topic.</p>
                                <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Explore
                                    Category</a>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Category Cards can be added here -->
                </div>
            </div>

            <!-- Sidebar (25%) -->
            <aside class="hidden lg:block lg:w-1/4 p-4 pr-0 lg:border-l border-gray-200 dark:border-gray-700">

                <!-- About Me Section -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-8">
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-100">About Me</h2>
                    <p class="text-gray-600 dark:text-gray-400">Short bio or info about the author. Lorem ipsum dolor sit
                        amet consectetur adipisicing elit.</p>
                </div>

                <!-- Recent Posts Section -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-8">
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-100">Recent Posts</h2>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Recent
                                Post 1</a></li>
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Recent
                                Post 2</a></li>
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Recent
                                Post 3</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </main>

    @include('layouts.footer')
@endsection
