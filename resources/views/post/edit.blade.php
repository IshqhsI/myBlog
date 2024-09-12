<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @livewire('edit-post-component', ['post' => $post, 'categories' => $categories, 'tags' => $tags, 'statuses' => $statuses])
        </div>
    </div>
</x-app-layout>
