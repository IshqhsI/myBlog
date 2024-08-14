<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="flex items-center mb-6">
                <p class="text-xl font-bold text-gray-900 dark:text-gray-100 mr-2">Tag Name : </p>
                <span
                    class="bg-blue-100 text-b text-sm text-white font-medium py-1 px-3 rounded-full border-blue-300 dark:bg-blue-600 dark:border-blue-700">
                    {{ $tag->name }}
                </span>
            </div>

            <!-- Posts Section -->
            <section>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Posts</h2>

                <!-- Post Cards -->
                <div class="flex flex-wrap -mx-4">
                    @foreach ($tag->posts as $post)
                        <div class="w-full sm:w-1/2 md:w-1/3 mb-8">
                            <article class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden lg:w-1/4">
                                <img src="{{ asset('storage/posts/' . $post->image) }}" alt="{{ $post->title }}"
                                    class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                                        {{ $post->title }}</h3>
                                    <div class="text-gray-700 dark:text-gray-300 mt-2">
                                        {!! Str::limit($post->content, 100) !!}
                                    </div>
                                </div>
                                <div
                                    class="p-4 border-t border-gray-200 dark:border-gray-600 flex justify-between items-center">
                                    <a href="/posts/{{ $post->id }}"
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition duration-300">Baca
                                        Selengkapnya</a>
                                    @if (auth()->check() && auth()->user()->can('edit', $post))
                                        <a href="/posts/{{ $post->id }}/edit"
                                            class="text-blue-600 hover:text-blue-700 ml-2 font-medium">Edit</a>
                                    @endif
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>

    </div>

</x-app-layout>
