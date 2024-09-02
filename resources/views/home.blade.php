@extends('layouts.main')
@section('content')
    <main class="container mx-auto">
        <!-- Hero Section -->
        <section class="relative hero-bg h-96 md:h-96 flex items-center justify-center text-center text-white mb-8">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="relative z-10 p-6">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">
                    Explore Endless Inspiration and Insight
                </h1>
                <p class="text-lg md:text-xl mb-6 lg:max-w-6xl">
                    Join us on a journey through a world of diverse and captivating content. From insightful articles to
                    engaging stories, find something to spark your curiosity.
                </p>
                <a href="#newsletter"
                    class="bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
                    Subscribe Now
                </a>
            </div>
        </section>

        <hr class="border-gray-300 dark:border-gray-700 mx-4 md:mx-6 mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden mb-12 mx-4 md:mx-6">
            <img src="{{ asset('storage/posts/' . $posts[0]->image) }}" alt="Featured Post"
                class="w-full h-full lg:h-96 object-contain">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">{{ $posts[0]->title }}</h2>
                <p class="mt-2 text-gray-600 dark:text-gray-400"> {!! \Illuminate\Support\Str::words(strip_tags($posts[0]->content), 30, '...') !!}</p>
                <a href="{{ route('post.show', $posts[0]->slug) }}"
                    class="mt-4 inline-block text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read
                    more →</a>
            </div>
        </div>


        <div class="mb-8 md:mx-6">
            <div class="flex border-b border-gray-300 dark:border-gray-600">
                <button id="all"
                    class="tab-button py-2 px-4 text-sm font-medium border-b-2 border-transparent focus:outline-none transition duration-300">All</button>
                @foreach ($categories as $i => $category)
                    <button id="{{ $category->name }}"
                        class="tab-button py-2 px-4 text-sm font-medium border-b-2 border-transparent focus:outline-none transition duration-300">{{ $category->name }}</button>
                @endforeach
            </div>
        </div>

        <!-- Recent Posts Grid -->
        <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100 mx-4 md:mx-6">Recent Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mx-4 md:mx-6">
            @if ($posts->count() === 0)
                <p>No posts found.</p>
            @else
                @foreach ($recentPosts as $i => $post)
                    <!-- Post Card -->
                    <div class="post-card bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-95"
                        data-category="{{ $post->category->name }}">
                        <img src="{{ asset('storage/posts/' . $post->image) }}" alt="Post image"
                            class="w-full md:h-96 object-contain border-b border-gray-300">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-gray-100">{{ $post->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">{!! \Illuminate\Support\Str::words(strip_tags($post->content), 20, '...') !!}</p>
                            <a href="{{ route('post.show', $post->slug) }}"
                                class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-semibold">Read
                                more →</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <hr class="border-gray-300 dark:border-gray-700 mx-4 md:mx-6 mt-6">

        <!-- Newsletter Signup -->
        <div class="bg-gradient-to-r from-indigo-800 to-purple-900 rounded-2xl shadow-2xl p-10 mt-10 transform hover:scale-y-100 transition duration-300 mb-12 mx-4 md:mx-6"
            id="newsletter">
            <h2 class="text-2xl font-bold mb-4 text-white">Subscribe to Our Newsletter</h2>
            <p class="text-white mb-6">Stay up-to-date with our latest articles and tech news. No spam, unsubscribe
                anytime.</p>
            <form class="flex flex-col sm:flex-row">
                <input type="email" placeholder="Enter your email"
                    class="flex-grow px-4 py-3 mb-2 sm:mb-0 sm:rounded-l-lg rounded-lg sm:rounded-r-none focus:outline-none focus:ring-2 focus:ring-indigo-600 text-gray-800 dark:text-gray-200">
                <button type="submit"
                    class="bg-indigo-600 text-white px-6 py-3 rounded-lg sm:rounded-l-none hover:bg-indigo-700 transition duration-300 transform hover:scale-95">Subscribe</button>
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
