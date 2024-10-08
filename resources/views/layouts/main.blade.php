<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- upgrade seo --}}
    <meta name="description" content="IshqCode Blog">
    <meta name="author" content="IshqCode">
    <meta name="keywords" content="IshqCode Blog">

    @if (isset($post))
        <!-- Open Graph Meta Tags for Facebook -->
        <meta property="og:title" content="{{ $post->title }}">
        <meta property="og:description" content="{!! \Illuminate\Support\Str::words(strip_tags($post->content), 18, '...') !!}">
        <meta property="og:image" content="{{ asset('storage/posts/' . $post->image) }}">
        <meta property="og:url" content="{{ route('post.show', $post->slug) }}">
        <meta property="og:type" content="article">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $post->title }}">
        <meta name="twitter:description" content="{{ strip_tags($post->excerpt) }}">
        <meta name="twitter:image" content="{{ asset('storage/posts/' . $post->image) }}">
        <meta name="twitter:url" content="{{ route('post.show', $post->slug) }}">
    @endif

    <title>IshqCode Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js"
        integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-CVBwiVY8.css') }}">
    <script src="{{ asset('build/assets/app-BgvOogpt.js') }}"></script>
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .float {
            animation: float 6s ease-in-out infinite;
        }

        .hero-bg {
            background-image: url('{{ asset('images/bg-hero.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    @include('layouts.header')
    @yield('content')

    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
</body>

</html>
