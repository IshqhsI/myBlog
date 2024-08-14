<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Comments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Comment Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Komentar:</h2>
                        <div class="text-gray-900 dark:text-gray-100">
                            {!! $comment->comment_text !!}
                        </div>
                    </div>
                </div>

                <!-- User Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Pengguna:</h2>
                        <div class="text-gray-900 dark:text-gray-100">
                            {{ $comment->user->name }}
                        </div>
                    </div>
                </div>

                <!-- Post Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Post:</h2>
                        <div class="text-gray-900 dark:text-gray-100 mb-2 text-xl font-extrabold">
                            {{ $comment->post->title }}
                        </div>
                        {{-- Post Content --}}
                        <div class="text-gray-900 dark:text-gray-100">
                            {!! $comment->post->content !!}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
