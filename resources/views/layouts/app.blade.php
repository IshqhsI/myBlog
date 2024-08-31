<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/7/tinymce.min.js" referrerpolicy="origin">
    </script>

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-C5dD6b0h.css') }}">
    <script src="{{ asset('build/assets/app-BgvOogpt.js') }}"></script>
    @livewireStyles

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="font-sans antialiased">
    <div class="bg-gray-100 dark:bg-gray-900" style="min-height: calc(100vh - 64px)">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

    </div>
    @include('layouts.footer')

    @livewireScripts
    <script>
        tinymce.init({
            selector: 'textarea#content',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'sliding',
            toolbar: 'insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            branding: false,
            skin: 'oxide-dark',
            content_css: 'dark',
            images_upload_url: '/upload_image',
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function() {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        // Retrieve the CSRF token from the meta tag
                        var token = document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content');

                        // Create FormData object to send file
                        var formData = new FormData();
                        formData.append('file', file);

                        // Send the file with XMLHttpRequest
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', '/upload_image', true);
                        xhr.setRequestHeader('X-CSRF-TOKEN', token); // Set CSRF token header

                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                cb(response.location, {
                                    title: file.name
                                });
                            } else {
                                console.error('Upload failed:', xhr.statusText);
                            }
                        };

                        xhr.onerror = function() {
                            console.error('Upload failed:', xhr.statusText);
                        };

                        xhr.send(formData);
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            }
        });

        // tinymce.init({
        //     selector: 'textarea#content', // ganti dengan selector yang sesuai
        //     plugins: 'image ',
        //     toolbar: 'image',
        //     images_upload_url: '/upload_image',
        //     automatic_uploads: true,
        //     file_picker_types: 'image',
        //     file_picker_callback: function(cb, value, meta) {
        //         var input = document.createElement('input');
        //         input.setAttribute('type', 'file');
        //         input.setAttribute('accept', 'image/*');
        //         input.onchange = function() {
        //             var file = this.files[0];
        //             var reader = new FileReader();
        //             reader.onload = function() {
        //                 var id = 'blobid' + (new Date()).getTime();
        //                 var blobCache = tinymce.activeEditor.editorUpload.blobCache;
        //                 var base64 = reader.result.split(',')[1];
        //                 var blobInfo = blobCache.create(id, file, base64);
        //                 blobCache.add(blobInfo);
        //                 cb(blobInfo.blobUri(), {
        //                     title: file.name
        //                 });
        //             };
        //             reader.readAsDataURL(file);
        //         };
        //         input.click();
        //     }
        // });
    </script>
</body>

</html>
