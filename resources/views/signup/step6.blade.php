@extends('signup.main')

@section('container')
    <div class="bg-login-image bg-cover bg-repeat-y bg-center min-h-screen w-full h-full -z-10 ">
        <section class="our-container py-10">
            <div class="min-h-screen flex justify-center items-center">
                <div
                    class="w-full flex flex-col justify-center bg-white border-4 border-black rounded-[40px] mt-5 sm:max-w-xl lg:px-14">
                    <div class="p-6 sm:p-8 flex flex-col">
                        <div class="flex flex-col items-center mb-5">
                            <h3 class="font-bold text-2xl text-center mb-1 uppercaselg:text-4xl">You’re All Set!</h3>
                            <p class="font-semibold text-base text-center">Now you can pick date and time to <br /> play
                                exciting learning kit!</p>

                        </div>
                        <a href="/products"
                            class="px-5 py-1 text-center bg-primary rounded-xl border-2 border-solid border-black font-extrabold text-base lg:text-xl uppercase hover:bg-purple">BOOK
                            NOW</a>
                        {{-- <form action="/signup_5" method="POST" class="flex flex-col items-stretch">
                            @csrf

                            <input type="hidden" value="{{ session('user_id') }}" name="user_id"> --}}
                        {{-- </form> --}}
                    </div>
                </div>

        </section>
    </div>
@endsection
