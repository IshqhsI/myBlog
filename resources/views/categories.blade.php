@extends('layouts.main')

@section('content')
    <main class="mx-auto py-2 lg:py-6 lg:px-8" style="min-height: calc(100vh - 132px)">
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
                    @foreach ($categories as $i => $category)
                        <div class="">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                                <div class="p-6">
                                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">
                                        {{ $category->name }}</h2>
                                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $category->description }}</p>
                                    <a href="{{ route('category.show', strtolower(Str::slug($category->name))) }}"
                                        class="text-indigo-600 dark:text-indigo-400 hover:underline">Explore
                                        Category</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Sidebar (25%) -->
            <aside class="hidden lg:block lg:w-1/4 p-4 pr-0 lg:border-l border-gray-200 dark:border-gray-700">
                <!-- Quotes Section -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-8">
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-100">Quotes</h2>
                    <blockquote
                        class="text-gray-600 dark:text-gray-400 border-l-4 border-gray-300 dark:border-gray-600 pl-4 italic">
                        “Aku ingin mencintaimu dengan sederhana. Seperti kata yang tak sempat diucapkan, kayu kepada api
                        yang menjadikannya abu. Aku ingin mencintaimu dengan sederhana. Seperti isyarat yang tak sempat
                        dikirimkan, awan kepada hujan yang menjadikannya tiada.” – Kahlil Gibran
                    </blockquote>
                </div>

                <!-- Recent Posts Section -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-8">
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-100">Recent Posts</h2>
                    <ul class="space-y-2">
                        @foreach ($recentPosts as $i => $recentPost)
                            <li><a href="{{ route('post.show', $recentPost->slug) }}"
                                    class="text-blue-600 dark:text-blue-400">{{ $recentPost->title }}</a></li>
                        @endforeach
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
