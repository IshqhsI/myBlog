@extends('layouts.main')
@section('content')
    <main class="mx-auto py-2 lg:py-6 lg:px-8" style="height: calc(100vh - 132px)">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content Column (75%) -->
            <div class="lg:w-3/4 px-4 py-4 lg:px-2 lg:pr-0">
                <!-- Introduction Section -->
                <section class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-8">
                    <div class="p-6">
                        <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100 mb-4">{{ $tag->name }}</h1>
                    </div>
                </section>

                <!-- Post Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @if ($tag->posts->count() === 0)
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">No posts found</h2>
                            </div>
                        </div>
                    @else
                        @foreach ($tag->posts as $i => $post)
                            {{-- @dd($post) --}}
                            <!-- Post Card -->
                            <div
                                class="post-card bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-95">
                                <img src="{{ asset('storage/posts/' . $post->image) }}" alt="Post image"
                                    class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">
                                        {{ $post->title }}
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-400 mb-4">{!! \Illuminate\Support\Str::words(strip_tags($post->content), 30, '...') !!}</p>
                                    <a href="{{ route('post.show', $post->slug) }}"
                                        class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read
                                        more →</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
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

        <div class=" block md:hidden">
            @include('layouts.footer')
        </div>
    </main>

    <div class="hidden md:block">
        @include('layouts.footer')
    </div>
@endsection
