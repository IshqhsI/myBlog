<header class="bg-white dark:bg-gray-800 shadow-lg" x-data="{ isOpen: false, isCategoriesOpen: false }">
    <nav class="max-w-7xl container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <a href="#" class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">IshqCode</a>
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}"
                class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 px-2 transition duration-300 {{ request()->routeIs('home') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Home</a>
                <a href="{{ route('posts') }}"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 px-2 transition duration-300 {{ request()->routeIs('posts') ? 'text-indigo-600 dark:text-indigo-400' : '' }} {{ request()->routeIs('posts.show') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Posts</a>
                <div class="relative group">
                    <a @mouseover="isCategoriesOpen = true" href="{{ route('categories') }}"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300 {{ request()->routeIs('categories') ? 'text-indigo-600 dark:text-indigo-400' : '' }} {{ request()->routeIs('categories.show') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">
                        Categories
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div x-show="isCategoriesOpen" @mouseover="isCategoriesOpen = true"
                        @mouseleave="isCategoriesOpen = false"
                        class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-lg overflow-hidden transition-opacity duration-300 opacity-0 group-hover:opacity-100 z-10 px-2">
                        <a href="#"
                            class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                            1</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                            2</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                            3</a>
                    </div>
                </div>
                <a href="{{ route('about') }}"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 px-2 transition duration-300 {{ request()->routeIs('about') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">About</a>
                <a href="{{ route('contact') }}"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 px-2 transition duration-300 {{ request()->routeIs('contact') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Contact</a>

            </div>
            <div class="flex items-center space-x-4">
                <form class="hidden md:flex flex-grow max-w-md">
                    <input type="text" placeholder="Search..."
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400">
                </form>
                <button id="darkModeToggle" aria-label="Toggle Dark Mode"
                    class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 transition duration-300 transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
                <button @click="isOpen = !isOpen" aria-label="Open/Close Menu" class="md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="md:hidden mt-3" x-show="isOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95">
            <a href="{{ route('home') }}"
                class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 {{ request()->routeIs('home') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Home</a>
            <a href="{{ route('posts') }}" class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 {{ request()->routeIs('posts') ? 'text-indigo-600 dark:text-indigo-400' : '' }} {{ request()->routeIs('posts.show') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Posts</a>
            <div class="relative">
                <a @click="isCategoriesOpen = !isCategoriesOpen" aria-label="Toggle Categories" href="{{ route('categories') }}"
                    class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300 {{ request()->routeIs('categories') ? 'text-indigo-600 dark:text-indigo-400' : '' }} {{ request()->routeIs('categories.show') ? 'text-indigo-600 dark:text-indigo-400' : '' }}" >
                    Categories
                </a>
                <div x-show="isCategoriesOpen" @click.outside="isCategoriesOpen = false"
                    class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-lg overflow-hidden transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                    <a href="#"
                        class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                        1</a>
                    <a href="#"
                        class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                        2</a>
                    <a href="#"
                        class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">Category
                        3</a>
                </div>
            </div>
            <a href="{{ route('about') }}"
                class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 {{ request()->routeIs('about') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">About</a>
            <a href="{{ route('contact') }}"
                class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 {{ request()->routeIs('contact') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Contact</a>
        </div>
    </nav>
</header>
