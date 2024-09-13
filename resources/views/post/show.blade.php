<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
            <article class="space-y-8">
                <!-- Header -->
                <header class="space-y-6 mb-6">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-gray-100">{{ $post->title }}</h1>
                    <p class="text-gray-700 dark:text-gray-300 text-base md:text-lg">
                        {{ $post->user->name }}
                        <span class="mx-2">•</span>
                        <span>{{ $post->created_at->format('F j, Y, g:i a') }}</span>
                    </p>
                    @if ($post->image)
                        <img src="{{ asset('storage/posts/' . $post->image) }}"
                            class="w-full aspect-video h-auto rounded-lg object-cover shadow-md mb-6"
                            alt="{{ $post->title }}">
                    @endif
                </header>

                <!-- Main Content -->
                <section class="space-y-6 mt-6 text-gray-700 dark:text-gray-300" id="content">
                    {!! $post->content !!}
                </section>

                <!-- Footer -->
                <footer class="mt-8 space-y-4">
                    <hr class="border-gray-300 dark:border-gray-700">
                    <p class="text-gray-700 dark:text-gray-300 text-base md:text-lg mt-4 font-semibold">Tags:</p>
                    <div class="flex flex-wrap gap-2 mt-3 mb-6">
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('tags.show', $tag->name) }}"
                                class="bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-full px-4 py-2 text-sm md:text-base font-semibold hover:bg-gray-300 dark:hover:bg-gray-600">{{ $tag->name }}</a>
                        @endforeach

                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-base md:text-lg mt-4">Share this post:</p>
                    <div class="flex space-x-4 mt-4">
                        <!-- Facebook Share Button -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('post.show', $post->slug)) }}"
                            target="_blank" class="bg-blue-600 text-white p-1 px-3 rounded-full hover:bg-blue-700"
                            title="Share on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <!-- WhatsApp Share Button -->
                        <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . route('post.show', $post->slug)) }}"
                            target="_blank" class="bg-green-600 text-white p-1 px-2 rounded-full hover:bg-green-700"
                            title="Share on WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        <!-- X (Twitter) Share Button -->
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('post.show', $post->slug)) }}&text={{ urlencode($post->title) }}"
                            target="_blank" class="bg-blue-400 text-white p-1 px-2 rounded-full hover:bg-blue-500"
                            title="Share on X (Twitter)">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </footer>
                <hr class="border-gray-300 dark:border-gray-700 mt-6">
            </article>

            <!-- Comments Section -->
            <div class="mt-8">
                <h4 class="text-2xl md:text-3xl font-bold mb-6 text-gray-900 dark:text-gray-100">Comments</h4>
                <div class="space-y-6">
                    @foreach ($post->comments as $comment)
                        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                            <strong
                                class="block text-xl text-gray-900 dark:text-gray-100">{{ $comment->user->name }}</strong>
                            <span class="text-gray-700 dark:text-gray-300 text-base">on
                                {{ $comment->created_at->format('F j, Y, g:i a') }}</span>
                            <p class="mt-2 text-gray-800 dark:text-gray-200 text-base">{{ $comment->comment_text }}</p>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
