<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Field</title>

    {{-- Scrollbar CSS --}}
    <link rel="stylesheet" href="/css/scrollbar.css" />

    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    {{-- Flowbite CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

    {{-- Tailwind Elements --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    {{-- Icons Feather --}}
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- Flowbite JS --}}
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    {{-- <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script> --}}

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    {{-- Vite --}}
    @vite('resources/css/app.css')
</head>

<body class="font-primary">

    @include('partials.navbar')

    @yield('container')

    @include('partials.footer')

    <script>
        feather.replace()
    </script>
</body>


</html>
