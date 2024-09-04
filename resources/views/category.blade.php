@extends('layouts.main')

@section('content')
    <main class="mx-auto py-2 lg:py-6 lg:px-8" style="min-height: calc(100vh - 132px)">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content Column (75%) -->
            <div class="lg:w-3/4 px-4 py-4 lg:px-2 lg:pr-0">
                <!-- Introduction Section -->
                <section class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-8">
                    <div class="p-6">
                        <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100 mb-4">{{ $category->name }}</h1>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">{{ $category->description }}</p>
                    </div>
                </section>

                <!-- Post Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @if ($category->posts->count() === 0)
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                            <div class="p-6">
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">No posts found</h2>
                            </div>
                        </div>
                    @else
                        @foreach ($category->posts as $i => $post)
                            <!-- Post Card -->
                            <div class="post-card bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-95"
                                data-category="{{ $post->category->name }}">
                                <img src="{{ asset('storage/posts/' . $post->image) }}" alt="Post image"
                                    class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">
                                        {{ $post->title }}
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-400 mb-4">{!! \Illuminate\Support\Str::words(strip_tags($post->content), 16, '...') !!}</p>
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

                <!-- Quotes Section -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-6">
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-100">Quotes</h2>
                    <blockquote
                        class="text-gray-600 dark:text-gray-400 border-l-4 border-gray-300 dark:border-gray-600 pl-4 italic">
                        “It always seems impossible until it’s done.” – Nelson Mandela
                    </blockquote>
                </div>

                <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-lg mb-6">
                    <h2 class="text-xl font-bold mb-4">Categories</h2>
                    <ul class="space-y-2">
                        @foreach ($categories as $i => $category)
                            <li><a href="{{ route('category.show', strtolower(Str::slug($category->name))) }}"
                                    class="text-blue-600 dark:text-blue-400">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-lg mb-6">
                    <h2 class="text-xl font-bold mb-4">Recent Posts</h2>
                    <ul class="space-y-2">
                        @foreach ($recentPosts as $i => $recentPost)
                            <li><a href="{{ route('post.show', $recentPost->slug) }}"
                                    class="text-blue-600 dark:text-blue-400">{{ $recentPost->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </main>

    <div class="block">
        @include('layouts.footer')
    </div>
@endsection
