<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class=" py-6 md:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card 1: Recent Posts -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Recent Posts</h3>
                        <ul class="space-y-2">
                            @foreach ($posts as $post)
                                <li class="border-b border-gray-200 dark:border-gray-700 pb-2 mb-2">
                                    <a href="{{ route('posts.show', $post->slug) }}"
                                        class="text-blue-500 hover:underline text-sm">
                                        {{ $post->title }}
                                    </a>
                                    <span class="block text-gray-600 dark:text-gray-400 text-xs">Posted on
                                        {{ $post->created_at->format('F j, Y') }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Site Statistics -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Site Statistics</h3>
                        <div class="flex flex-wrap justify-between">
                            <div class="p-2 ps-0 flex-col text-center w-1/2">
                                <div class="p-4 bg-blue-100 dark:bg-blue-700 rounded-lg">
                                    <h4 class="text-2xl font-bold text-blue-700 dark:text-blue-300">{{ $totalPosts }}
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-300">Total Posts</p>
                                </div>
                            </div>
                            <div class="p-2 pe-0 flex-col text-center w-1/2">
                                <div class="bg-green-100 dark:bg-green-700 p-4 rounded-lg ">
                                    <h4 class="text-2xl font-bold text-green-700 dark:text-green-300">
                                        {{ $totalComments }}
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-300">Comments</p>
                                </div>
                            </div>
                            <div class="p-2 ps-0 flex-col w-1/2 text-center">
                                <div class="bg-yellow-100 dark:bg-yellow-700 p-4 rounded-lg">
                                    <h4 class="text-2xl font-bold text-yellow-700 dark:text-yellow-300">
                                        {{ $totalCategories }}
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-300">Categories</p>
                                </div>
                            </div>
                            <div class="p-2 pe-0 flex-col w-1/2 text-center">
                                <div class="bg-red-100 dark:bg-red-700 p-4 rounded-lg ">
                                    <h4 class="text-2xl font-bold text-red-700 dark:text-red-300">{{ $totalTags }}
                                    </h4>
                                    <p class="text-gray-600 dark:text-gray-300">Tags</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card 3: Quick Actions -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Quick Actions</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="{{ route('posts.create') }}"
                                    class="flex items-center text-blue-500 hover:underline">
                                    <i class="fas fa-plus mr-2"></i> Create a New Post
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('posts.index') }}"
                                    class="flex items-center text-blue-500 hover:underline">
                                    <i class="fas fa-list mr-2"></i> View All Posts
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile.edit') }}"
                                    class="flex items-center text-blue-500 hover:underline">
                                    <i class="fas fa-user-edit mr-2"></i> Edit Your Profile
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
