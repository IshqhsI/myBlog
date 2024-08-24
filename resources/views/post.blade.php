@extends('layouts.main')
@section('content')
    <main class="max-w-7xl mx-auto px-4 py-4 lg:px-6 lg:py-6">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content (Left Column) -->
            <div class="lg:w-3/4 px-4 py-4 lg:px-2 lg:pr-0">
                <article class="prose prose-lg lg:prose-xl dark:prose-dark">
                    <header>
                        <h1 class="text-3xl md:text-4xl font-bold mb-4">This is a Dummy Blog Post Title</h1>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm md:text-base">
                            <small>Published on August 15, 2024 by John Doe</small>
                        </p>
                        <img src="https://via.placeholder.com/800x400" class="w-full h-auto rounded-lg mb-6" alt="Dummy Image">
                    </header>

                    <section>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm md:text-base leading-relaxed text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum
                            vestibulum. Cras venenatis euismod malesuada.</p>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm md:text-base  leading-relaxed text-justify">Praesent tristique magna sit amet purus gravida quis blandit turpis cursus. Suspendisse potenti.
                            Nullam vehicula ipsum a arcu cursus vitae congue mauris. Ut tristique et egestas quis ipsum
                            suspendisse ultrices gravida dictum fusce.</p>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm md:text-base  leading-relaxed text-justify">Morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut sem viverra aliquet
                            eget sit amet. In est ante in nibh mauris cursus mattis molestie a. Non sodales neque sodales ut
                            etiam sit amet nisl purus in mollis. Aliquam ut porttitor leo a diam sollicitudin tempor id eu.
                        </p>
                    </section>

                    <footer class="mt-8">
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm md:text-base">Tags:</p>
                        <div class="flex flex-wrap gap-2">
                            <a href="#"
                                class="inline-block bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-full px-3 py-1 text-sm font-semibold">Technology</a>
                            <a href="#"
                                class="inline-block bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-full px-3 py-1 text-sm font-semibold">Laravel</a>
                            <a href="#"
                                class="inline-block bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-full px-3 py-1 text-sm font-semibold">Web
                                Development</a>
                        </div>
                        <hr class="border-gray-300 dark:border-gray-700 mt-6">
                        <p class="text-gray-600 dark:text-gray-400 mt-4 text-sm md:text-base">Share this post:</p>
                        <div>
                            <!-- Social media share buttons can be added here -->
                        </div>
                    </footer>
                </article>

                <div class="mt-8 mb-4">
                    <h4 class="text-xl md:text-2xl font-bold mb-4">Comments</h4>
                    <!-- Comments section -->
                    <div class="mb-6">
                        <strong class="block text-lg">Jane Smith</strong>
                        <span class="text-gray-600 dark:text-gray-400">on August 15, 2024</span>
                        <p class="mt-2">Great post! Learned a lot about the new features in Laravel.</p>
                    </div>
                    <div class="mb-6">
                        <strong class="block text-lg">Michael Johnson</strong>
                        <span class="text-gray-600 dark:text-gray-400">on August 14, 2024</span>
                        <p class="mt-2">Thanks for sharing! This was really helpful for my recent project.</p>
                    </div>
                    <div class="mb-6">
                        <strong class="block text-lg">Alice Brown</strong>
                        <span class="text-gray-600 dark:text-gray-400">on August 13, 2024</span>
                        <p class="mt-2">Could you provide more details on the setup process?</p>
                    </div>
                </div>

                <!-- Comment Form -->
                @auth
                    <hr class="border-gray-300 dark:border-gray-700 mt-6">
                    <div class="mt-8">
                        <h4 class="text-xl md:text-2xl font-bold mb-4 ml-1">Leave a Comment</h4>
                        <form action="{{ route('comments.store') }}" method="POST"
                            class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-lg text-gray-900">
                            @csrf
                            <div class="mb-2">
                                <label for="comment"
                                    class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Comment</label>
                                <textarea id="comment" name="comment" rows="4"
                                    class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400"
                                    required placeholder="Write your comment here..."></textarea>
                            </div>
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600">Submit
                            </button>
                        </form>
                    </div>
                @else
                    <p class="text-gray-600 dark:text-gray-400 mt-4">You need to be logged in to leave a comment.</p>
                @endauth
            </div>

            <!-- Sidebar (Right Column) -->
            <aside class="hidden lg:block lg:w-1/4 px-4 pr-0 py-6 lg:border-l border-gray-200 dark:border-gray-700">
                <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-lg mb-6">
                    <h2 class="text-xl font-bold mb-4">About the Author</h2>
                    <p class="text-gray-700 dark:text-gray-300">John Doe is a web developer with over 10 years of experience
                        in building web applications using modern technologies.</p>
                </div>

                <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-lg mb-6">
                    <h2 class="text-xl font-bold mb-4">Categories</h2>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-blue-600 dark:text-blue-400">Technology</a></li>
                        <li><a href="#" class="text-blue-600 dark:text-blue-400">Laravel</a></li>
                        <li><a href="#" class="text-blue-600 dark:text-blue-400">Web Development</a></li>
                    </ul>
                </div>

                <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-lg mb-6">
                    <h2 class="text-xl font-bold mb-4">Recent Posts</h2>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-blue-600 dark:text-blue-400">How to Get Started with Laravel
                                10</a></li>
                        <li><a href="#" class="text-blue-600 dark:text-blue-400">Understanding Flexbox in CSS</a></li>
                        <li><a href="#" class="text-blue-600 dark:text-blue-400">Top 10 Tips for Effective Web
                                Design</a></li>
                    </ul>
                </div>


            </aside>
        </div>
    </main>

    @include('layouts.footer')
@endsection
