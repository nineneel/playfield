@extends('layouts.main')

@section('container')
    <!-- Learning Kit Section Start -->
    <section id="learningkit" class="mt-[88px] pt-10 pb-20 lg:bg-learningkit-image">
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
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs bg-white">
                        Best
                    </button>
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs bg-white">
                        New
                    </button>
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs bg-white">
                        Age
                    </button>
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs bg-white">
                        Price
                    </button>
                </div>
                <div class="flex flex-wrap justify-center items-stretch place-items-center mt-8 gap-20">
                    @foreach ($products as $product)
                        <div
                            class="flex flex-col justify-between items-start bg-white card-product w-[280px] h-[420px] border-2 border-black px-6 py-3 rounded-3xl font-secondary shadow-product-card swiper-slide ">
                            <h1 class="font-bold text-xl self-center text-center mb-3 uppercase">
                                {{ $product->name }}
                            </h1>
                            <div class="border-2 border-solid border-black rounded-lg overflow-hidden mb-3 w-full relative">
                                <img src="{{ asset('storage/' . $product->images[0]->image) }}"
                                    alt="{{ $product->name }} image profile" class="h-[178px] object-cover w-full" />
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
            </div>
        </div>
    </section>
    <!-- Learning Kit Section End -->
@endsection
