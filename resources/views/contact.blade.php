@extends('layouts.main')
@section('content')
    <main class="container mx-auto p-4 px-0 h-10" style="height: calc(100vh - 132px)">
        <section
            class="bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 rounded-lg shadow-lg p-8 mb-6 border-t-4 border-b-4 border-indigo-600 md:mx-6"
            id="contact">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4">Contact Me</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400">I’d love to hear from you! Whether you have
                        questions, feedback, or just want to say hello, feel free to reach out using the form below.
                        I'll do my best to get back to you as soon as possible.</p>
                </div>
                <div class="flex flex-col lg:flex-row lg:space-x-6">
                    <!-- Contact Form -->
                    <div class="lg:w-full">
                        <form action="#" method="POST" class="space-y-6">
                            <div>
                                <label for="name"
                                    class="block text-gray-800 dark:text-gray-100 font-semibold mb-2">Your
                                    Name</label>
                                <input type="text" id="name" name="name" placeholder="John Doe"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 transition duration-300">
                            </div>
                            <div>
                                <label for="email"
                                    class="block text-gray-800 dark:text-gray-100 font-semibold mb-2">Your
                                    Email</label>
                                <input type="email" id="email" name="email" placeholder="you@example.com"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 transition duration-300">
                            </div>
                            <div>
                                <label for="message"
                                    class="block text-gray-800 dark:text-gray-100 font-semibold mb-2">Your
                                    Message</label>
                                <textarea id="message" name="message" placeholder="Write your message here..." rows="6"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-400 transition duration-300"></textarea>
                            </div>
                            <div>
                                <button type="submit"
                                    class="bg-indigo-800 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition duration-300 transform hover:scale-95">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="relative md:hidden">
            @include('layouts.footer')
        </div> --}}
        @include('layouts.footer')
    </main>
@endsection
