<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play Field | My Dashboard</title>

    {{-- Scrollbar CSS --}}
    <link rel="stylesheet" href="/css/scrollbar.css" />

    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    {{-- Icons Feather --}}
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    {{-- Tailwind Elements --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    {{-- Vite --}}
    @vite('resources/css/app.css')
</head>

<body class="font-primary bg-grey">

    <div class="flex h-[100vh]">
        @include('userDashboard.myFriend.sidebar')
        <div class="w-full lg:ml-[350px] h-full">
            @yield('container')
        </div>
    </div>

    <script>
        feather.replace()
    </script>
</body>


</html>
