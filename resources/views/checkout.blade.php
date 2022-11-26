@extends('layouts.main')

@section('container')
    <section id="home" class="my-[88px]">
        <div class="our-container">
            <h1 class="font-extrabold text-3xl text-center my-10 pt-10">Checkout</h1>
            <div
                class="border-2 border-black rounded-lg p-2 grid grid-cols-1 justify-center items-center gap-y-4 lg:text-4xl lg:grid-cols-3">
                <div
                    class="border-2 border-black rounded-lg md:h-[168px] lg:h-[198px] overflow-hidden flex justify-center items-center">
                    <img src="{{ asset('storage/' . $product->images[0]->image) }}" alt="product detail"
                        class="self-center object-cover">
                </div>
                <div class="flex flex-col gap-y-2 items-center lg:items-start lg:ml-4">
                    <h2 class="font-bold text-base uppercase lg:text-2xl">{{ $product->name }}</h2>
                    <h4 class="font-semibold text-sm lg:text-lg">{{ date('d M Y', strtotime($order->bookdate)) }},
                        {{ date('h:i A', strtotime($order->booktime)) }}</h4>
                </div>
                <div
                    class="flex flex-col justify-between justify-self-center lg:items-end lg:justify-self-end lg:self-stretch">
                    <a href="/my-dashboard/orders"
                        class="bg-orange border-[2px] border-black rounded-md w-6 h-6 flex-col items-center justify-between hidden lg:flex">
                        <span class="w-7 h-[2px] origin-top-left rotate-45 bg-black block translate-x-[6px]"></span>
                        <span class="w-7 h-[2px] origin-bottom-left -rotate-45 bg-black block translate-x-[6px]"></span>
                    </a>
                    <a href="/product/{{ $product->id }}"
                        class="flex bg-primary border-2 border-black rounded-2xl font-extrabold text-base py-1 px-4 lg:text-xl lg:py-1 lg:px-7">Details</a>
                </div>
            </div>
            <div class="flex flex-col gap-y-4 text-center my-10 lg:mt-20">
                <h5 class="font-bold text-lg uppercase lg:text-xl">Total</h5>
                <h3 class="font-extrabold text-xl lg:text-4xl">Rp. {{ $product->price }}</h3>
            </div>
            <div class="flex flex-col gap-y-4 mt-5">
                <h6 class="font-semibold text-sm text-center lg:text-base">Pay Now</h6>
                <div class="grid grid-cols-1 lg:grid-cols-3 relative mb-[360px]">
                    <div class="bg-blue py-2 flex justify-center rounded-t-md border-2 border-black border-b-0">
                        <img src="/img/payment_logo/bca.png" alt="bca logo">
                        <div
                            class="bg-blue flex flex-col gap-y-3 p-12 absolute top-full left-0 w-full rounded-b-md text-[#474A57] lg:gap-y-5 border-2 border-black border-t-0">
                            <h4 class="font-semibold text-base">Account Number</h4>
                            <h3 class="font-bold text-4xl">123 1234567890</h3>
                            <ul class="list-decimal list-inside font-semibold text-base">
                                <li>Choose m-transfer > BCA Virtual Account.</li>
                                <li>Input Virtual Account Number 123 1234567890 and choose send.</li>
                                <li>Check the data on screen. Ensure that Merchant is PLAYFIELD, Total amount, and your
                                    username is correct. If Correct, choose YES.</li>
                                <li>Input your m-BCA PIN and click OK.</li>
                                <li>If “Transaction is Failed. Payment account reach daily limit” is displayed, please
                                    retry the transaction using other methods.</li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="bg-purple py-2 flex justify-center rounded-t-md hover:grayscale cursor-pointer border-2 border-black">
                        <img src="/img/payment_logo/ovo.png" alt="bca logo">
                    </div>
                    <div
                        class="bg-green py-2 flex justify-center rounded-t-md hover:grayscale cursor-pointer border-2 border-black">
                        <img src="/img/payment_logo/alfamart.png" alt="bca logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
