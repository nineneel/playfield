@extends('layouts.main')

@section('container')
    <!-- Learning Kit Section Start -->
    <section id="learningkit" class="mt-[88px] pt-10 pb-20 lg:bg-learningkit-image">
        <div class="container mx-auto">
            <div class="px-4 flex flex-col justify-center items-center">
                <div class="flex flex-wrap">
                    <h2 class="w-full font-bold text-3xl text-center mb-1">
                        MY FRIENDS
                    </h2>
                    <p class="w-full font-semibold text-base text-center">
                        Add your friends and ask them to play dates with you
                    </p>
                </div>
                <div class="flex mt-6 gap-x-4">
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs bg-white">
                        Male
                    </button>
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs bg-white">
                        Female
                    </button>
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs bg-white">
                        Age
                    </button>
                    <button class="px-[14px] py-2 border-2 border-black rounded-full font-extrabold text-xs bg-white">
                        Likes
                    </button>
                </div>
                <div class="grid grid-cols-1 gap-y-8 gap-x-16 rounded-xl px-6 py-6 lg:mx-20 lg:px-9 lg:grid-cols-2">
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
                                <button
                                    class="absolute bottom-4 right-4 bg-primary w-12 h-12 flex items-center justify-center rounded-full border-2 border-black hover:bg-purple">
                                    <i data-feather="message-square"></i>
                                </button>
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
            </div>
        </div>
    </section>
    <!-- Learning Kit Section End -->
@endsection
