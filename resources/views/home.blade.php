@extends('layouts.main')

@section('container')
    <!-- Hero Section Start -->
    <section id="home" class="mt-[88px]">
        <div class="bg-none bg-cover bg-no-repeat bg-center lg:bg-hero-image p-8 px-4 xl:px-28">
            <div
                class="container mx-auto flex flex-col items-center w-full font-primary rounded-2xl bg-white/70 lg:pt-[112px] lg:px-24 lg:pb-16">
                <h1 class="font-extrabold text-5xl text-center mb-5">
                    While Learning is
                    <span class="block text-primary text-shadow md:inline">Child’s Play</span>
                </h1>
                <p class="font-semibold text-base text-center mb-16 lg:max-w-4xl">
                    A place where parents can set a date and time for their
                    children to learn in a more interesting and fun way
                    through playing!
                </p>
                <a href="/products"
                    class="font-extrabold text-xl bg-primary rounded-2xl border-solid border-2 border-black px-8 py-2 lg:mt-[120px] hover:bg-purple">
                    BOOK NOW
                </a>
            </div>
        </div>
        <div class="bg-purple border-y-4 border-solid border-black">
            <div class="container mx-auto px-4 flex flex-col justify-center items-center mt-8 mb-9 xl:px-28">
                <h1 class="font-extrabold text-xl text-center uppercase mb-7 md:block lg:text-3xl">
                    BOOK A PLAY DATE ANYTIME
                </h1>
                <div class="flex flex-col w-full justify-between md:flex-row">
                    <div class="flex flex-col justify-center items-center lg:flex-row lg:gap-x-4">
                        <h2 class="text-center font-extrabold text-primary text-4xl text-shadow">
                            1
                        </h2>
                        <h4 class="uppercase font-bold text-base text-center lg:text-xl">
                            PICK YOUR LEARNING KIT
                        </h4>
                    </div>
                    <span class="my-4 flex justify-center md:hidden"><i data-feather="arrow-down"></i></span>
                    <span class="my-4 justify-center hidden md:flex md:mx-4 lg:mx-8"><i
                            data-feather="arrow-right"></i></span>
                    <div class="flex flex-col justify-center items-center lg:flex-row lg:gap-x-4">
                        <h2 class="text-center font-extrabold text-primary text-4xl text-shadow">
                            2
                        </h2>
                        <h4 class="uppercase font-bold text-base text-center lg:text-xl">
                            SELECT DATE AND TIME
                        </h4>
                    </div>
                    <span class="my-4 flex justify-center md:hidden"><i data-feather="arrow-down"></i></span>
                    <span class="my-4 justify-center hidden md:flex md:mx-4 lg:mx-8"><i
                            data-feather="arrow-right"></i></span>
                    <div class="flex flex-col justify-center items-center lg:flex-row lg:gap-x-4">
                        <h2 class="text-center font-extrabold text-primary text-4xl text-shadow">
                            3
                        </h2>
                        <h4 class="uppercase font-bold text-base text-center lg:text-xl">
                            REGISTER YOUR PARTICIPANTS
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Learning Kit Section Start -->
    <section id="learningkit" class="pt-10 pb-20">
        <div class="container mx-auto">
            <div class="px-4 flex flex-col justify-center items-center">
                <div class="flex flex-wrap">
                    <h2 class="w-full font-bold text-3xl text-center mb-1">
                        PICK A LEARNING KIT TO PLAY
                    </h2>
                    <p class="w-full font-semibold text-base text-center">
                        Choose a Learning Kit That Suits Your Kid’s Interest
                        and Age!
                    </p>
                </div>
                <div class="flex mt-6 gap-x-4">
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs">
                        Best
                    </button>
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs">
                        New
                    </button>
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs">
                        Age
                    </button>
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs">
                        Price
                    </button>
                </div>
                <div class="flex jutify-center items-center mt-8 gap-x-1 relative swiper Swiper2">
                    <div class="swiper-wrapper flex items-center pt-3 pb-20">
                        @foreach ($products as $product)
                            <div
                                class="flex flex-col justify-between items-start bg-white card-product w-[280px] h-[420px] border-2 border-black px-6 py-3 rounded-3xl font-secondary shadow-product-card swiper-slide ">
                                <h1 class="font-bold text-xl self-center text-center mb-3 uppercase">
                                    {{ $product->name }}
                                </h1>
                                <div
                                    class="border-2 border-solid border-black rounded-lg overflow-hidden mb-3 w-full relative">
                                    <img src="{{ asset('storage/' . $product->images[0]->image) }}"
                                        alt="{{ $product->name }} image profile" class="h-[178px] object-cover  w-full" />
                                    <p
                                        class="absolute right-1 top-1 py-1 px-2 border-2 border-black rounded-lg bg-green font-semibold text-xs">
                                        Age: {{ $product->age }}
                                    </p>
                                </div>

                                <h4 class="font-bold text-xs text-left mb-2">
                                    {{ $product->slogan }}
                                </h4>
                                <p class="font-medium text-xs text-left mb-3 overflow-hidden">
                                    {{ $product->excerpt }}
                                </p>
                                <div class="w-full flex justify-between items-center">
                                    <p class="font-extrabold text-base">
                                        Rp. {{ $product->price }}/ sesi
                                    </p>
                                    <div class="flex gap-x-1 items-center font-primary">
                                        <span class="font-extrabold text-[10px] flex items-center">
                                            <img src="/img/star_2.svg" alt="star" class="w-4 h-4">
                                            {{ $product->star }}</span>
                                        <p class="font-medium text-[10px] ">(28)</p>
                                    </div>
                                </div>
                                <a href="/product/{{ $product->id }}"
                                    class="mt-4 mb-2 px-4 py-1 border-2 border-black rounded-2xl uppercase self-center font-extrabold text-lg bg-primary hover:bg-purple">
                                    Book Now
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex justify-between absolute left-1/2 z-10 -translate-x-1/2 w-[400px]">
                        <!-- Left Arrow -->
                        <button id="left-product" type="button"
                            class="flex justify-center items-center border-solid border-2 border-black rounded-full bg-primary w-10 h-10 hover:bg-purple">
                            <i data-feather="chevron-left"></i>
                        </button>
                        <!-- End Left Arrow -->

                        <!-- Right Arrow -->
                        <button id="right-product" type="button"
                            class="flex justify-center items-center border-solid border-2 border-black rounded-full bg-primary w-10 h-10 ml-1 hover:bg-purple">
                            <i data-feather="chevron-right"></i>
                        </button>
                        <!-- End Right Arrow -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Learning Kit Section End -->

    <!-- Facilities Section Start -->
    <section id="facilities" class="bg-blue">
        <div class="w-full bg-bottom bg-no-repeat lg:bg-facilities-image pt-10">
            <div class="flex flex-col pb-20 container mx-auto px-4 xl:px-28">
                <h1 class="font-bold text-4xl text-center">
                    OUR FACILITIES
                </h1>
                <div class="grid grid-cols-1 font-secondary mt-10 gap-x-6 gap-y-12 md:grid-cols-2 lg:grid-cols-3 ">
                    @foreach ($facilities as $facility)
                        <div
                            class="flex overflow-hidden w-full h-full border-2 border-black rounded-xl group min-h-[144px] bg-white">
                            <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->facility_name }}"
                                class="w-1/2 h-[144px] object-cover group-hover:w-full transition-all duration-500" />
                            <div
                                class="bg-white p-2 w-full flex items-center justify-center border-l-2 border-black group-hover:hidden">
                                <h4 class="font-semibold font-base group-hover:opacity-0">
                                    {{ $facility->facility_name }}
                                </h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Meet New Friend Start -->
    <section id="meetnewfriend" class="pt-10 pb-10">
        <div class="our-container">
            <h1 class="section-title mb-6">MEET NEW FRIENDS</h1>
            <div class="grid grid-cols-1 gap-y-8 gap-x-16 bg-grey rounded-xl px-6 py-6 lg:mx-20 lg:px-9 lg:grid-cols-2">
                @foreach ($users as $user)
                    <div class="flex flex-col rounded-xl border-2 border-black shadow-profile-card ml-12">
                        <div class="w-full bg-blue text-center py-2 rounded-t-xl">
                            <h5 class="font-bold text-xl">ID Card</h5>
                        </div>
                        <div class="flex flex-col bg-grey-2 pl-20 p-5 relative rounded-b-xl">
                            <div
                                class="absolute left-0 -translate-x-1/2 top-1/2 -translate-y-1/2 z-10 border-2 border-black overflow-hidden rounded-full bg-white">
                                <img src="@if ($user->password != 0) {{ asset('storage/' . $user->details->image) }} @else {{ $user->details->image }} @endif"
                                    alt="Photo Profile" class="w-28 h-28 object-cover" />
                            </div>
                            @if (auth()->check())
                                <a href="/my-dashboard/friend/add/{{ $user->id }}"
                                    class="absolute bottom-4 right-4 bg-primary w-12 h-12 flex items-center justify-center rounded-full border-2 border-black hover:bg-purple">
                                    <i data-feather="message-square"></i>
                                </a>
                            @endif
                            <h5 class="font-bold text-xl">{{ $user->name }}</h5>
                            <p class="font-bold text-xs my-2">
                                {{ $user->details->gender }},
                                {{ \Carbon\Carbon::parse($user->details->birthdate)->diff(\Carbon\Carbon::now())->format('%y years old') }}
                            </p>
                            <ul class="font-medium text-xs pr-14">
                                <li class="truncate">Like : {{ $user->details->likes }}</li>
                                <li class="truncate">Dislike : {{ $user->details->dislikes }}</li>
                                <li class="truncate">Allergies : {{ $user->details->allergies }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="w-full text-center">
                <a href="/friends" type="button"
                    class="font-extrabold text-xl bg-primary rounded-2xl border-solid border-2 border-black px-8 py-2 mt-6 hover:bg-purple">
                    VIEW ALL
                </a>
            </div>
        </div>
    </section>
    <!-- Meet New Friend End -->

    <!-- Find Us Here Start -->
    <section id="findushere" class="pt-10 pb-20 bg-green">
        <div class="our-container">
            <h2 class="section-title mb-6">FIND US HERE</h2>
            <div class="border-[3px] border-black rounded-lg overflow-hidden relative">
                <a href="https://goo.gl/maps/1jpzAhuD3QG6xvLK9"
                    class="z-10 absolute font-extrabold text-xl bg-primary border-2 border-black rounded-xl py-2 px-8 bottom-4 left-1/2 -translate-x-1/2 hover:bg-purple"
                    target="_blank">SEE MAP</a>
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=1245&amp;height=400&amp;hl=en&amp;q=Shining Stars Academy Bintaro Jl. Elang Blok Hf.1 No.15, Pd. Pucung, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15229&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://formatjson.org/">format json</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 400px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 400px;
                        }

                        .gmap_iframe {
                            height: 400px !important;
                        }
                    </style>
                </div>
            </div>
        </div>
    </section>
    <!-- Find Us Here End -->

    <!-- Capture Your Moment Start -->
    <section id="galery" class="pt-10 pb-14">
        <div class="our-container">
            <h2 class="section-title">CAPTURE YOUR MOMENT</h2>
            <!-- mt-6 flex gap-x-2  -->
            <div class="pt-6 px-12 relative">
                <!-- Left Arrow -->
                <button id="left-galery" type="button"
                    class="flex justify-center items-center border-solid border-2 border-black rounded-full bg-primary w-10 h-10 absolute left-0 top-1/2 -translate-y-1/2 z-10 hover:bg-purple">
                    <i data-feather="chevron-left"></i>
                </button>
                <!-- End Left Arrow -->
                <div class="swiper-container swiper mySwiper  pb-12">
                    <div class="swiper-wrapper">
                        @foreach ($photos as $photo)
                            <div class="swiper-slide swiper-slide-home">
                                <img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $photo->photo_name }}" />
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Right Arrow -->
                <button id="right-galery" type="button"
                    class="flex justify-center items-center border-solid border-2 border-black rounded-full bg-primary w-10 h-10 absolute right-0 top-1/2 -translate-y-1/2 z-10 hover:bg-purple">
                    <i data-feather="chevron-right"></i>
                </button>

                <!-- End Right Arrow -->
            </div>
        </div>
    </section>
    <!-- Capture Your Moment End -->

    <!-- What They Say Start -->
    <section id="tetimony" class="pt-10 pb-20 bg-pink">
        <div class="our-container">
            <h2 class="section-title mb-6">WHAT THEY SAY</h2>
            <div class="gap-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <div class="testimony-card">
                    <img src="/img/testimony.png" alt="tetimony"
                        class="w-[72px] h-[72px] rounded-full border-2 border-black object-contain" />
                    <p class="font-medium text-lg text-center">
                        Playdate is a fun way for my kids to learn while
                        having fun with other kids.
                    </p>
                    <span class="font-bold text-lg text-center">-C</span>
                </div>
                <div class="testimony-card">
                    <p class="font-medium text-lg text-center">
                        Playdate is a fun way for my kids to learn while
                        having fun with other kids.
                    </p>
                    <span class="font-bold text-lg text-center">-C</span>
                    <img src="/img/testimony.png" alt="tetimony"
                        class="w-[72px] h-[72px] rounded-full border-2 border-black object-contain" />
                </div>
                <div class="testimony-card">
                    <img src="/img/testimony.png" alt="tetimony"
                        class="w-[72px] h-[72px] rounded-full border-2 border-black object-contain" />
                    <p class="font-medium text-lg text-center">
                        Playdate is a fun way for my kids to learn while
                        having fun with other kids.
                    </p>
                    <span class="font-bold text-lg text-center">-C</span>
                </div>
                <div class="testimony-card">
                    <p class="font-medium text-lg text-center">
                        Playdate is a fun way for my kids to learn while
                        having fun with other kids.
                    </p>
                    <span class="font-bold text-lg text-center">-C</span>
                    <img src="/img/testimony.png" alt="tetimony"
                        class="w-[72px] h-[72px] rounded-full border-2 border-black object-contain" />
                </div>
                <div class="testimony-card">
                    <img src="/img/testimony.png" alt="tetimony"
                        class="w-[72px] h-[72px] rounded-full border-2 border-black object-contain" />
                    <p class="font-medium text-lg text-center">
                        Playdate is a fun way for my kids to learn while
                        having fun with other kids.
                    </p>
                    <span class="font-bold text-lg text-center">-C</span>
                </div>
                <div class="testimony-card">
                    <p class="font-medium text-lg text-center">
                        Playdate is a fun way for my kids to learn while
                        having fun with other kids.
                    </p>
                    <span class="font-bold text-lg text-center">-C</span>
                    <img src="/img/testimony.png" alt="tetimony"
                        class="w-[72px] h-[72px] rounded-full border-2 border-black object-contain" />
                </div>
            </div>
        </div>
    </section>
    <!-- What They Say End -->

    <!-- About Section Start -->
    <section id="about" class="pt-10 pb-20">
        <div class="our-container">
            <div class="flex flex-wrap lg:flex-row">
                <img src="/img/logo.svg" alt="logo" class="w-full lg:w-1/2" />
                <div class="flex flex-col gap-4 w-full lg:w-1/2">
                    <h2 class="font-extrabold text-5xl text-center lg:text-left">
                        Welcome to
                        <span class="block text-primary text-shadow">Playfield!</span>
                    </h2>
                    <p class="font-bold text-center text-base lg:text-xl lg:text-justify mb-6">
                        Playfield was established in 2022 bringing children
                        and fun education together. Located in Jakarta,
                        Indonesia, parents can book a play date for their
                        children to learn various topics in a fun way.
                        Opportunities to play include one-on-one and small
                        group so your kids can creat new friendships!
                    </p>
                    <ul class="font-bold text-center text-base lg:text-xl lg:text-left gap-y-2">
                        <li>Contact us for further information</li>
                        <li>Email : playfieldindonesia@gmail.com</li>
                        <li>Phone number: 081234567891</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    {{-- JS --}}
    <script src="/js/script.js"></script>

    <!-- Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            slidesPerColumn: 3,
            slidesPerGroup: 3,
            grid: {
                rows: 2,
                fill: "row",
            },
            spaceBetween: 16,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function(index, className) {
                    return '<span class="' + className + ' bg-green w-3 h-3 border-2 border-black"></span>';
                },
            },
            navigation: {
                nextEl: "#right-galery",
                prevEl: "#left-galery",
            },
        });
        var swiper2 = new Swiper(".Swiper2", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                rotate: 0,
                stretch: -100,
                depth: 150,
                modifier: 2,
                slideShadows: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function(index, className) {
                    return '<span class="' + className + ' bg-green w-3 h-3 border-2 border-black"></span>';
                },
            },
            navigation: {
                nextEl: "#right-product",
                prevEl: "#left-product",
            },
        });
    </script>
@endsection
