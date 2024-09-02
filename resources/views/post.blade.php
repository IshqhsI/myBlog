@extends('layouts.main')
@section('content')
    <main class="mx-auto py-2 px-3 lg:py-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content (Left Column) -->
            <div class="lg:w-3/4 px-4 py-4 lg:px-8 lg:pr-0">
                <article class="prose prose-lg lg:prose-xl dark:prose-dark">
                    <header>
                        <h1 class="text-3xl md:text-4xl font-bold mb-4">{{ $post->title }}</h1>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm md:text-base">
                            <small>Posted on {{ $post->created_at->format('j F Y, g:i a') }} by
                                {{ $post->user->name }}</small>
                        </p>
                        <img src="{{ asset('storage/posts/' . $post->image) }}" class="w-full h-auto rounded-lg mb-6"
                            alt="Dummy Image">
                    </header>

                    <section id="content">
                        {!! $post->content !!}
                    </section>

                    <footer class="mt-8">
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm md:text-base">Tags:</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('tag.show', $tag->name) }}"
                                    class="inline-block bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-full px-3 py-1 text-sm font-semibold">{{ $tag->name }}</a>
                            @endforeach

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
                    @if ($post->comments !== null && $post->comments->count() > 0)
                        @foreach ($post->comments as $comment)
                            <!-- Comments section -->
                            <div class="mb-6">
                                <strong class="block text-lg">{{ $comment->user->name }}</strong>
                                <span class="text-gray-600 dark:text-gray-400">on
                                    {{ $comment->created_at->format('j F Y, g:i a') }}</span>
                                <p class="mt-2">{{ $comment->comment_text }}</p>
                            </div>
                        @endforeach
                    @else
                        <p class="text-gray-600 dark:text-gray-400 mt-4">No comments yet.</p>
                    @endif
                </div>

                <!-- Comment Form -->
                @auth
                    <hr class="border-gray-300 dark:border-gray-700 mt-6">
                    <div class="mt-8">
                        <h4 class="text-xl md:text-2xl font-bold mb-4 ml-1">Leave a Comment</h4>
                        <form action="{{ route('comments.user.store') }}" method="POST"
                            class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-lg text-gray-900">
                            @csrf
                            <div class="mb-2">
                                <label for="comment"
                                    class="block text-gray-700 dark:text-gray-300 text-sm font-medium mb-2">Comment</label>
                                <textarea id="comment" name="comment_text" rows="4"
                                    class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-400"
                                    required placeholder="Write your comment here..."></textarea>
                                <input type="hidden" name="post_slug" value="{{ $post->slug }}">
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
                <!-- Quotes Section -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mb-6">
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-100">Quotes</h2>
                    <blockquote
                        class="text-gray-600 dark:text-gray-400 border-l-4 border-gray-300 dark:border-gray-600 pl-4 italic">
                        “Tidak ada rasa bersalah yang bisa mengubah masa lalu, dan tidak ada kekhawatiran yang dapat mengubah masa depan.” – Umar bin Khattab.
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
                            <li><a href="{{ route('post.show', $recentPost->slug) }}" class="text-blue-600 dark:text-blue-400">{{ $recentPost->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </main>

    @include('layouts.footer')
@endsection
