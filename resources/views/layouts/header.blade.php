<header class="bg-white dark:bg-gray-800 shadow-lg" x-data="{ isOpen: false, isCategoriesOpen: false }">
    <nav class="max-w-7xl container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <a href="#" class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">IshqCode</a>
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 px-2 transition duration-300 {{ request()->routeIs('home') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Home</a>
                <a href="{{ route('posts') }}"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 px-2 transition duration-300 {{ request()->routeIs('posts') ? 'text-indigo-600 dark:text-indigo-400' : '' }} {{ request()->routeIs('post.show') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Posts</a>
                <a href="{{ route('categories') }}"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 px-2 transition duration-300 {{ request()->routeIs('categories') ? 'text-indigo-600 dark:text-indigo-400' : '' }} {{ request()->routeIs('category.show') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">
                    Categories</a>
                <a href="{{ route('about') }}"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 px-2 transition duration-300 {{ request()->routeIs('about') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">About</a>
                <a href="{{ route('contact') }}"
                    class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 px-2 transition duration-300 {{ request()->routeIs('contact') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Contact</a>
                {{-- dashboard menu for admin --}}
                @role('superadmin')
                    <a href="{{ route('dashboard') }}"
                        class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 px-2 transition duration-300">Dashboard</a>
                @endrole

            </div>
            <div class="flex items-center space-x-4">
                <form class="hidden md:flex flex-grow max-w-md" action="{{ route('search') }}" method="POST">
                    @csrf
                    <input type="text" placeholder="Search..." name="search"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400">
                </form>
                {{-- Button Login --}}
                <div class="hidden md:flex">
                    @if (Route::has('login') && !Auth::check())
                        <a href="{{ route('login') }}"
                            class="inline-block px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-blue-700 rounded-md border border-gray-300 dark:border-blue-700 hover:bg-gray-50 dark:hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-blue-500 transition duration-300">
                            Login
                        </a>
                    @else
                        {{-- Form Logout --}}
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit"
                                class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 dark:bg-indigo-700 rounded-md border border-transparent hover:bg-indigo-700 dark:hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 transition duration-300">
                                Logout
                            </button>
                        </form>
                    @endif
                </div>

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
            <a href="{{ route('posts') }}"
                class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 {{ request()->routeIs('posts') ? 'text-indigo-600 dark:text-indigo-400' : '' }} {{ request()->routeIs('post.show') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Posts</a>
            <a href="{{ route('categories') }}"
                class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 {{ request()->routeIs('categories') ? 'text-indigo-600 dark:text-indigo-400' : '' }} {{ request()->routeIs('category.show') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">
                Categories</a>
            <a href="{{ route('about') }}"
                class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 {{ request()->routeIs('about') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">About</a>
            <a href="{{ route('contact') }}"
                class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 {{ request()->routeIs('contact') ? 'text-indigo-600 dark:text-indigo-400' : '' }}">Contact</a>
            {{-- dashboard menu for admin --}}
            @role('superadmin')
                <a href="{{ route('dashboard') }}"
                    class="block py-2 text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition duration-300">Dashboard</a>
            @endrole
            @if (Route::has('login') && !Auth::check())
                <a href="{{ route('login') }}"
                    class="py-2 text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-blue-600 rounded-md border border-gray-300 dark:border-blue-700 hover:bg-gray-50 dark:hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-blue-500 transition duration-300 block mt-2 text-center">
                    Login
                </a>
            @else
                {{-- Form Logout --}}
                <form method="POST" action="{{ route('logout') }}" class="w-full mt-2">
                    @csrf
                    <button type="submit"
                        class="py-2 text-sm font-medium text-white bg-indigo-600 dark:bg-indigo-700 rounded-md border border-transparent hover:bg-indigo-700 dark:hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-indigo-400 transition duration-300 text-center inline-block w-full">
                        Logout
                    </button>
                </form>
            @endif
        </div>
    </nav>
</header>
