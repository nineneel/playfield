@extends('adminDashboard.layouts.main')

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
    </section>
    <!-- Detail Product End -->

    {{-- JS --}}
    <script src="/js/detailproduct.js"></script>
@endsection

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: "#right-detail",
            prevEl: "#left-detail",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });


    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
</script>
