@extends('userDashboard.layouts.main')

@section('container')
    <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none pl-0 mb-4 pt-4 bg-grey border-b-4" id="tabs-tabFill"
        role="tablist">
        <li class="nav-item flex-auto text-center" role="presentation">
            <a href="#tabs-allorder"
                class="nav-link w-full block font-semibold text-base lg:text-lg leading-tight uppercase border-x-0 border-t-0 border-b-4 border-transparent px-6 py-3  my-2 md:my-0 hover:border-transparent hover:bg-gray-100 focus:border-transparent active"
                id="tabs-home-tabFill" data-bs-toggle="pill" data-bs-target="#tabs-allorder" role="tab"
                aria-controls="tabs-allorder" aria-selected="true">All</a>
        </li>
        <li class="nav-item flex-auto text-center" role="presentation">
            <a href="#tabs-notpaidorder"
                class="nav-link w-full block font-semibold text-base lg:text-lg leading-tight uppercase border-x-0 border-t-0 border-b-4 border-transparent px-6 py-3 my-2 md:my-0 hover:border-transparent hover:bg-gray-100 focus:border-transparent"
                id="tabs-profile-tabFill" data-bs-toggle="pill" data-bs-target="#tabs-notpaidorder" role="tab"
                aria-controls="tabs-notpaidorder" aria-selected="false">Not Paid</a>
        </li>
        <li class="nav-item flex-auto text-center" role="presentation">
            <a href="#tabs-soonorder"
                class="nav-link w-full block font-semibold text-base lg:text-lg leading-tight uppercase border-x-0 border-t-0 border-b-4 border-transparent px-6 py-3 my-2 md:my-0 hover:border-transparent hover:bg-gray-100 focus:border-transparent "
                id="tabs-messages-tabFill" data-bs-toggle="pill" data-bs-target="#tabs-soonorder" role="tab"
                aria-controls="tabs-soonorder" aria-selected="false">Soon</a>
        </li>
        <li class="nav-item flex-auto text-center" role="presentation">
            <a href="#tabs-completedorder"
                class="nav-link w-full block font-semibold text-base lg:text-lg leading-tight uppercase border-x-0 border-t-0 border-b-4 border-transparent px-6 py-3 my-2 md:my-0 hover:border-transparent hover:bg-gray-100 focus:border-transparent "
                id="tabs-messages-tabFill" data-bs-toggle="pill" data-bs-target="#tabs-completedorder" role="tab"
                aria-controls="tabs-completedorder" aria-selected="false">Completed</a>
        </li>
        <li class="nav-item flex-auto text-center" role="presentation">
            <a href="#tabs-failorder"
                class="nav-link w-full block font-semibold text-base lg:text-lg leading-tight uppercase border-x-0 border-t-0 border-b-4 border-transparent px-6 py-3 my-2 md:my-0 hover:border-transparent hover:bg-gray-100 focus:border-transparent "
                id="tabs-messages-tabFill" data-bs-toggle="pill" data-bs-target="#tabs-failorder" role="tab"
                aria-controls="tabs-failorder" aria-selected="false">Fail</a>
        </li>
    </ul>
    <div class="tab-content " id="tabs-tabContentFill">
        @php
            use Carbon\Carbon;
        @endphp
        <div class="tab-pane fade py-4 px-12 show active" id="tabs-allorder" role="tabpanel"
            aria-labelledby="tabs-home-tabFill">
            <div class="flex flex-col gap-y-6 justify-center">
                @if ($orders->count() > 0)
                    @foreach ($orders as $order)
                        @php
                            $order_date = Carbon::parse($order->bookdate);
                        @endphp
                        <x-order-card :order="$order" />
                    @endforeach
                @else
                    <div class="flex justify-center">
                        <h2 class="text-2xl font-regular">No order, <a href="/products"
                                class="font-bold text-black underline">order
                                now</a></h2>

                    </div>
                @endif
            </div>
        </div>
        <div class="tab-pane fade py-4 px-12" id="tabs-notpaidorder" role="tabpanel" aria-labelledby="tabs-profile-tabFill">
            <div class="flex flex-col gap-y-6 justify-center">
                @php
                    $not_paid_count = 0;
                @endphp
                @foreach ($orders as $order)
                    @php
                        $order_date_not_paid = Carbon::parse($order->bookdate);
                    @endphp
                    @if ($order->paid_status == 'not_paid' && !($order_date_not_paid->isPast() == 1))
                        @php
                            $not_paid_count++;
                        @endphp
                        <x-order-card :order="$order" />
                    @endif
                @endforeach
                @if (!$not_paid_count > 0)
                    <div class="flex justify-center">
                        <h2 class="text-2xl font-regular">No order, <a href="/products"
                                class="font-bold text-black underline">order
                                now</a></h2>
                    </div>
                @endif
            </div>
        </div>
        <div class="tab-pane fade py-4 px-12" id="tabs-soonorder" role="tabpanel" aria-labelledby="tabs-profile-tabFill">
            <div class="flex flex-col gap-y-6 justify-center">
                @php
                    $paid_count = 0;
                @endphp
                @foreach ($orders as $order)
                    @php
                        $order_date_soon = Carbon::parse($order->bookdate);
                    @endphp
                    @if ($order->paid_status == 'paid' && !($order_date_soon->isPast() == 1))
                        @php
                            $paid_count++;
                        @endphp
                        <x-order-card :order="$order" />
                    @endif
                @endforeach
                @if (!$paid_count > 0)
                    <div class="flex justify-center">
                        <h2 class="text-2xl font-regular">No order, <a href="/products"
                                class="font-bold text-black underline">order
                                now</a></h2>
                    </div>
                @endif
            </div>
        </div>
        <div class="tab-pane fade py-4 px-12" id="tabs-completedorder" role="tabpanel"
            aria-labelledby="tabs-profile-tabFill">
            <div class="flex flex-col gap-y-6 justify-center">
                @php
                    $com_paid_count = 0;
                @endphp
                @foreach ($orders as $order)
                    @php
                        $order_date_com = Carbon::parse($order->bookdate);
                    @endphp
                    @if ($order->paid_status == 'paid' && $order_date_com->isPast() == 1)
                        @php
                            $com_paid_count++;
                        @endphp
                        <x-order-card :order="$order" />
                    @endif
                @endforeach
                @if (!$com_paid_count > 0)
                    <div class="flex justify-center">
                        <h2 class="text-2xl font-regular">No order, <a href="/products"
                                class="font-bold text-black underline">order
                                now</a></h2>
                    </div>
                @endif
            </div>
        </div>
        <div class="tab-pane fade py-4 px-12" id="tabs-failorder" role="tabpanel" aria-labelledby="tabs-profile-tabFill">
            <div class="flex flex-col gap-y-6 justify-center">
                @php
                    $com_not_paid_count = 0;
                @endphp
                @foreach ($orders as $order)
                    @php
                        $order_date_com_not = Carbon::parse($order->bookdate);
                    @endphp
                    @if ($order->paid_status == 'not_paid' && $order_date_com_not->isPast() == 1)
                        @php
                            $com_not_paid_count++;
                        @endphp
                        <x-order-card :order="$order" status="Failed" />
                    @endif
                @endforeach
                @if (!$com_not_paid_count > 0)
                    <div class="flex justify-center">
                        <h2 class="text-2xl font-regular">No order, <a href="/products"
                                class="font-bold text-black underline">order
                                now</a></h2>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
