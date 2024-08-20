<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="flex items-center mb-6">
                <p class="text-xl font-bold text-gray-900 dark:text-gray-100 mr-2">
                    Category Name : </p>
                <span
                    class="bg-blue-100 text-b text-white font-medium py-1 px-3 rounded-full border-blue-300 dark:bg-blue-600 dark:border-blue-700">
                    {{ $category->name }}
                </span>
            </div>

            <!-- Posts Section -->
            <section>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                    Posts</h2>

                <!-- Post Cards -->
                <div class="w-full flex flex-wrap mb-6">
                    @if ($category->posts->count() > 0)
                        @foreach ($category->posts as $post)
                            @php
                                $htmlContent = $post->content;
                                $textContent = strip_tags($htmlContent);
                            @endphp
                            <div class="w-full md:w-1/2 lg:w-1/3 px-2 mt-4">
                                <article class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                                    <img src="{{ asset('storage/posts/' . $post->image) }}" alt="{{ $post->title }}"
                                        class="w-full object-contain border-b-2 border-gray-200 dark:border-gray-600"
                                        style="aspect-ratio: 4/3">
                                    <div class="p-4">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">
                                            {{ $post->title }}
                                        </h3>
                                        <p class="text-gray-700 dark:text-gray-300 text-sm">
                                            By {{ $post->user->name }}
                                            <span>- on {{ $post->created_at->format('F j, Y') }}</span>
                                        </p>
                                        <div class="text-gray-700 dark:text-gray-300 text-base mb-4 mt-4"
                                            style="min-height: 3em;">
                                            {!! Str::limit($textContent, 80) !!}
                                        </div>
                                    </div>
                                    <div
                                        class="p-4 border-t border-gray-200 dark:border-gray-600 flex justify-between items-center">
                                        <a href="{{ route('posts.show', $post->slug) }}"
                                            class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition duration-300">Baca
                                            Selengkapnya</a>
                                        @if (auth()->check() && auth()->user()->can('edit', $post))
                                            <a href="/posts/{{ $post->id }}/edit"
                                                class="text-blue-600 hover:text-blue-700 ml-4 font-medium">Edit</a>
                                        @endif
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @else
                        <p class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4">Tidak ada post</p>
                    @endif
                </div>
        </div>
        </section>
    </div>

    </div>

</x-app-layout>
