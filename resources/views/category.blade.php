@extends('layouts.main')

@section('content')
    <main class="mx-auto px-4 py-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content Column (75%) -->
            <div class="lg:w-3/4 px-4 py-4 lg:px-2 lg:pr-0">

                <!-- Introduction Section -->
                <section class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-8">
                    <div class="p-6">
                        <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100 mb-4">Category Name</h1>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Description of the category.</p>
                    </div>
                </section>

                <!-- Post Cards Grid -->
                <div class="flex flex-wrap">
                    <!-- Post Card 1 -->
                    <article class="flex flex-col rounded-lg shadow-lg w-full md:w-1/2 lg:w-1/3 lg:px-2 py-2">
                        <div class="bg-white dark:bg-gray-800">
                            <img src="https://via.placeholder.com/400x200" alt="Post 2 Image"
                                class="w-full h-40 object-cover rounded-t-lg">
                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">Post Title 1</h2>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">Brief description of the post. Lorem ipsum
                                    dolor sit amet consectetur.</p>
                                <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Read More</a>
                            </div>
                        </div>
                    </article>

                    <!-- Post Card 2 -->
                    <article class="flex flex-col rounded-lg shadow-lg w-full md:w-1/2 lg:w-1/3 lg:px-2 py-2">
                        <div class="bg-white dark:bg-gray-800">
                            <img src="https://via.placeholder.com/400x200" alt="Post 2 Image"
                                class="w-full h-40 object-cover rounded-t-lg">
                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">Post Title 2</h2>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">Brief description of the post. Lorem ipsum
                                    dolor sit amet consectetur.</p>
                                <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Read More</a>
                            </div>
                        </div>
                    </article>

                    <!-- Post Card 3 -->
                    <article class="flex flex-col rounded-lg shadow-lg w-full md:w-1/2 lg:w-1/3 lg:px-2 py-2">
                        <div class="bg-white dark:bg-gray-800">
                            <img src="https://via.placeholder.com/400x200" alt="Post 2 Image"
                                class="w-full h-40 object-cover rounded-t-lg">
                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">Post Title 3</h2>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">Brief description of the post. Lorem ipsum
                                    dolor sit amet consectetur.</p>
                                <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline">Read More</a>
                            </div>
                        </div>
                    </article>

                    <!-- Additional Post Cards can be added here -->
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
