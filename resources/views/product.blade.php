@extends('layouts.main')

@section('container')
    <!-- Detail Product Start -->
    <section class="mt-[88px] pt-10 pb-20">
        <div class="our-container mx-auto">
            <div class="z-10 w-full px-5">
                @error('failed')
                    <div class="bg-red-100 py-3 px-4 text-red-500 font-regular mb-4 text-sm rounded-lg "><span
                            class="font-medium">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="flex flex-col gap-5 px-4">
                <!-- Title Detail Product Start -->
                <h1 class="font-extrabold text-4xl text-center">
                    {{ $product->name }}
                </h1>
                <!-- Title Detail Product End -->

                <!-- Image Detail Start -->
                <div class="rounded-lg border-2 border-black overflow-hidden">
                    <div class="swiper mySwiper relative">
                        <button id="left-detail" type="button"
                            class="flex justify-center items-center border-solid border-2 border-black rounded-full bg-primary w-10 h-10 absolute left-4 top-1/2 -translate-y-1/2 z-10 hover:bg-purple">
                            <i data-feather="chevron-left"></i>
                        </button>
                        <div class="swiper-wrapper items-center">
                            @foreach ($product->images as $image)
                                <div class="swiper-slide swiper-slide-product">
                                    <img src="{{ asset('storage/' . $image->image) }}"
                                        alt="detail product {{ $loop->iteration }}" class="object-contain" />
                                </div>
                            @endforeach
                        </div>
                        <button id="right-detail" type="button"
                            class="flex justify-center items-center border-solid border-2 border-black rounded-full bg-primary w-10 h-10 absolute right-4 top-1/2 -translate-y-1/2 z-10 hover:bg-purple">
                            <i data-feather="chevron-right"></i>
                        </button>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Image Detail End -->

                <!-- Detail Content Start -->
                <div class="grid grid-cols-1 lg:grid-cols-3 justify-items-start items-center gap-6">
                    <h3 class="font-extrabold text-xl lg:col-span-2">
                        {{ $product->slogan }}
                    </h3>
                    <div id="slogan" class="bg-green px-3 py-1 border-2 border-black rounded-lg lg:justify-self-end">
                        <h4 class="font-semibold text-2xl">Age: {{ $product->age }}</h4>
                    </div>
                    <div class="flex font-medium text-base text-left lg:col-start-1 lg:col-span-2">
                        {!! $product->description !!}
                    </div>
                    <div class="flex gap-3 lg:col-start-1 lg:row-start-3 lg:col-span-2">
                        @foreach ($product->tags as $tag)
                            <div class="rounded-full bg-blue text-center">
                                <p class="font-semibold text-sm px-2">
                                    {{ $tag->title }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div class="lg:col-start-1 lg:row-start-4 lg:col-span-2">
                        <button type="button" id="open-modal"
                            class="font-extrabold text-xl bg-primary rounded-2xl border-solid border-2 border-black px-8 py-2 hover:bg-purple">BOOK
                            NOW</button>
                    </div>
                    <div
                        class="flex flex-col lg:items-end lg:col-start-2 lg:row-start-3 lg:self-end lg:col-span-2 lg:row-span-2 lg:justify-self-end">
                        <h3 class="font-bold text-2xl mb-6">
                            Rp. {{ $product->price }} / sesi
                        </h3>
                        <div class="flex items-center">
                            <img src="/img/star_2.svg" alt="star" class="mr-2" />
                            <h5 class="font-extrabold text-xl mr-5">{{ $product->star }}</h5>
                            <p class="font-medium text-xl">
                                (28 Orang telah bermain learning kit ini)
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Detail Content End -->

                <!-- Steps Start -->
                <div class="flex flex-col gap-y-4 mt-8 group">
                    <!-- How to play Start -->
                    <div id="content-wrapper" class="bg-green border-t-8 border-green p-4 flex flex-col">
                        <div id="content-detail-title" class="flex justify-between items-center cursor-pointer">
                            <h2 class="font-extrabold text-xl">
                                How to play
                            </h2>
                            <img src="/img/chevron-up.svg" id="icon-up-content" class="w-8 h-8 lg:mr-4 hidden" />
                            <img src="/img/chevron-down.svg" id="icon-down-content" class="w-8 h-8 lg:mr-4" />
                        </div>

                        <div id="content-detail" class="hidden font-medium text-base mt-4 lg:pr-16">
                            {!! $product->details->body !!}
                        </div>
                    </div>
                    <!-- How to play End -->

                    <!-- Detail Start -->
                    <div id="content-wrapper" class="bg-green border-t-8 border-green p-4 flex flex-col">
                        <div id="content-detail-title" class="flex justify-between items-center cursor-pointer">
                            <h2 class="font-extrabold text-xl">Details</h2>
                            <img src="/img/chevron-up.svg" id="icon-up-content" class="w-8 h-8 lg:mr-4 hidden" />
                            <img src="/img/chevron-down.svg" id="icon-down-content" class="w-8 h-8 lg:mr-4" />
                        </div>
                        <div id="content-detail" class="hidden">
                            <ul class="grid grid-cols-6">
                                <li class="font-medium text-base mt-4 col-span-1">
                                    Learning kit contents
                                </li>

                                <li class="font-medium text-base mt-4">
                                    :
                                </li>
                                <li class="font-medium text-base mt-4 col-span-4 lg:pr-16">
                                    {{ $product->details->contents }}
                                </li>
                                <li class="font-medium text-base mt-4 col-span-1">
                                    Duration
                                </li>

                                <li class="font-medium text-base mt-4 flex-auto">
                                    :
                                </li>
                                <li class="font-medium text-base mt-4 col-span-4 lg:pr-16">
                                    {{ $product->details->duration }}
                                </li>
                                <li class="font-medium text-base mt-4 col-span-1">
                                    Dont's
                                </li>
                                <li class="font-medium text-base mt-4">
                                    :
                                </li>
                                <li class="font-medium text-base mt-4 col-span-4 lg:pr-16">
                                    {{ $product->details->donts }}
                                </li>
                                <li class="font-medium text-base mt-4 col-span-1">
                                    *What You Get
                                </li>
                                <li class="font-medium text-base mt-4">
                                    :
                                </li>
                                <li class="font-medium text-base mt-4 col-span-4 lg:pr-16">
                                    {{ $product->details->benefits }}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Detail End -->

                    <!-- Review Start -->
                    <div id="content-wrapper" class="bg-green border-t-8 border-green p-4 flex flex-col">
                        <div id="content-detail-title" class="flex justify-between items-center cursor-pointer">
                            <h2 class="font-extrabold text-xl">Review</h2>
                            <img src="/img/chevron-up.svg" id="icon-up-content" class="w-8 h-8 lg:mr-4 hidden" />
                            <img src="/img/chevron-down.svg" id="icon-down-content" class="w-8 h-8 lg:mr-4" />
                        </div>
                        <div id="content-detail" class="hidden">
                            <div class="flex items-center gap-2 py-3 border-b-2 border-black">
                                <img src="/img/testimony.png" alt="tetimony"
                                    class="w-[72px] h-[72px] rounded-full border-2 border-black object-contain" />
                                <span class="font-bold text-lg text-center mx-10">-C</span>
                                <p class="font-medium text-lg text-center">
                                    Playdate is a fun way for my kids to
                                    learn while having fun with other kids.
                                </p>
                            </div>
                            <div class="flex items-center gap-2 py-3 border-b-2 border-black">
                                <img src="/img/testimony_2.png" alt="tetimony"
                                    class="w-[72px] h-[72px] rounded-full border-2 border-black object-contain" />
                                <span class="font-bold text-lg text-center mx-10">-A</span>
                                <p class="font-medium text-lg text-center">
                                    “My kid’s knowledge elevates while
                                    playing “Day and Night” learning kit. He
                                    also can socialize with new kids”
                                </p>
                            </div>
                            <div class="flex items-center gap-2 py-3 border-b-2 border-black">
                                <img src="/img/testimony_3.png" alt="tetimony"
                                    class="w-[72px] h-[72px] rounded-full border-2 border-black object-contain" />
                                <span class="font-bold text-lg text-center mx-10">-J</span>
                                <p class="font-medium text-lg text-center">
                                    Playdate is an effective way for my kids
                                    to learn something without being stress.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Review End -->
                </div>
                <!-- Steps End -->
            </div>
        </div>

        {{-- Modal --}}
        <div class="fixed z-50 inset-0 invisible overflow-y-auto transition-all duration-300 opacity-0"
            {{-- <div class="fixed z-50 inset-0 overflow-y-auto transition-all duration-300 opacity-100" --}} aria-labelledby="modal-title" role="dialog" aria-modal="true" id="book-modal">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
                <form action="/checkout" method="POST"
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                    <div class="bg-white sm:p-6 sm:pb-4">
                        <div class=" flex items-center justify-center">
                            <div class="flex flex-col gap-4 justify-center pt-4 px-4 text-center sm:block sm:p-0">
                                <h2 class="font-bold text-2xl mb-5">Select Date and Time</h2>
                                {{-- @dd(\Carbon\Carbon::now()->toDateString()) --}}
                                <div class="border-2 border-black rounded-lg bg-primary overflow-hidden">
                                    <div class="font-medium text-base py-1">
                                        <input type="datetime-local" name="bookingdate"
                                            min="{{ \Carbon\Carbon::now()->addDays(1)->toDateString() }}T00:00"
                                            class="bg-primary border-none font-bold focus:border-none focus:ring-0"
                                            required="">
                                    </div>
                                    <div class="bg-white border-t-2 py-2 border-black px-3 gap-4">
                                        <div class="flex items-center justify-center">
                                            <h4 class="font-semibold text-base">
                                                {{ count($product->users) }}/{{ count($users) }} people
                                                have joined!</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-x-2 pt-4 items-center justify-center">
                                    @foreach ($product->users as $user)
                                        <img src="@if ($user->password != 0) {{ asset('storage/' . $user->details->image) }} @else {{ $user->details->image }} @endif"
                                            alt="user image"
                                            class="w-7 h-7 object-cover border-2 border-black rounded-full">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mb-8 gap-4 lg:gap-6">
                        <button type="button"
                            class="close-modal inline-flex bg-white border-2 border-black rounded-2xl font-extrabold text-base py-1 px-4 lg:text-lg lg:py-1 lg:px-7 hover:bg-purple">
                            Cancel
                        </button>
                        <button type="submit"
                            class="inline-flex bg-primary border-2 border-black rounded-2xl font-extrabold text-base py-1 px-2 uppercase lg:text-lg lg:py-1 lg:px-3 hover:bg-purple">
                            Book Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Detail Product End -->

    {{-- JS --}}
    <script src="/js/detailproduct.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: "#right-detail",
                prevEl: "#left-detail",
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function(index, className) {
                    return '<span class="' + className + ' bg-green w-3 h-3 border-2 border-black"></span>';
                },
            },
        });


        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        const bookModal = document.querySelector("#book-modal");
        const modalOpen = document.querySelector("#open-modal");
        const modalCencel = document.querySelector(".close-modal");

        modalOpen.addEventListener("click", () => {
            bookModal.classList.remove('invisible');
            bookModal.classList.add('visible');
            bookModal.classList.add('opacity-100');
        })

        modalCencel.addEventListener("click", () => {
            bookModal.classList.add('invisible');
            bookModal.classList.remove('visible');
            bookModal.classList.remove('opacity-100');
        })
    </script>
@endsection
