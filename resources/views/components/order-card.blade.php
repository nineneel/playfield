@php
    use Carbon\Carbon;
@endphp

<div
    class="border-[3px] border-purple rounded-lg p-2 grid grid-cols-1 justify-center items-center gap-y-4 relative shadow-order-card lg:text-4xl lg:grid-cols-3">
    <h5 class="absolute right-4 top-4 font-semibold uppercase text-base lg:text-xl text-purple">
        @if ($order->paid_status == 'not_paid' && !(Carbon::parse($order->bookdate)->isPast() == 1))
            To paid
        @elseif ($order->paid_status == 'paid' && !(Carbon::parse($order->bookdate)->isPast() == 1))
            Soon
        @elseif ($order->paid_status == 'paid' && Carbon::parse($order->bookdate)->isPast() == 1)
            Completed
        @elseif ($order->paid_status == 'not_paid' && Carbon::parse($order->bookdate)->isPast() == 1)
            Fail
        @endif
    </h5>
    <div
        class="border-[3px] border-black rounded-lg md:h-[168px] lg:min-h-[198px] overflow-hidden flex justify-center items-center object-cover">
        <img src="{{ asset('storage/' . $order->product->images[0]->image) }}" alt="product detail"
            class="self-center object-cover">
    </div>
    <div class="flex flex-col gap-4 justify-between col-span-2">
        <div class="flex flex-col gap-y-2 justify-between items-center lg:mt-6 lg:items-start lg:ml-4">
            <h2 class="font-bold text-base uppercase lg:text-2xl">{{ $order->product->name }}
            </h2>
            <h4 class="font-semibold text-sm lg:text-lg">
                {{ date('d M Y', strtotime($order->bookdate)) }},
                {{ date('h:i A', strtotime($order->booktime)) }}</h4>
            <h4 class="font-bold text-sm lg:text-lg">Rp. {{ $order->product->price }}</h4>
        </div>
        <div class="flex flex-wrap justify-center lg:justify-end gap-4 lg:items-end pb-4">
            @if ($order->paid_status == 'not_paid')
                <a href="/checkout/{{ $order->id }}"
                    class=" flex border-[3px] bg-primary border-black rounded-xl font-bold text-sm py-1 px-4 lg:text-base lg:py-1.5 lg:px-6 hover:bg-purple">Pay
                    Now</a>
            @endif
            <a href="/product/{{ $order->product->id }}"
                class="flex border-[3px] bg-primary border-black rounded-xl font-bold text-sm py-1 px-4 lg:text-base lg:py-1.5 lg:px-6 hover:bg-purple">Details</a>
            <a href="https://wa.me/6285241593533?text=Hello%20saya%sudah%transfer,%20berikut%20bukinya:" target="_blank"
                class="flex border-[3px] bg-primary border-black rounded-xl font-bold text-sm py-1 px-4 lg:text-base lg:py-1.5 lg:px-6 hover:bg-purple">Contact</a>

        </div>
    </div>
</div>
