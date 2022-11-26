@extends('signup.main')

@section('container')
    <div class="bg-login-image bg-cover bg-repeat-y bg-center min-h-screen w-full h-full -z-10 ">
        <section class="our-container py-10">
            <div class="min-h-screen flex justify-center items-center">
                <div
                    class="w-full flex flex-col justify-center bg-white border-4 border-black rounded-[40px] mt-5 sm:max-w-xl lg:px-14">
                    <div class="p-6 sm:p-8">
                        <div class="flex flex-col items-center mb-5">
                            <h3 class="font-bold text-2xl text-center mb-1 uppercaselg:text-4xl">WELCOME TO <br />
                                PLAYFIELD</h3>
                            <p class="font-semibold text-base text-center">Book a Playdate for Your Love Ones!</p>
                        </div>

                        @error('failed')
                            <div class="bg-red-100 py-3 px-4 text-red-500 font-regular mb-4 text-sm rounded-lg"><span
                                    class="font-medium">Sign Up Failed!</span> {{ $message }}
                            </div>
                        @enderror

                        <form action="/signup" method="POST" class="flex flex-col gap-4">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-semibold">Email <span
                                        class="text-red-500">*</span></label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border-2 border-black py-2 text-gray-900 sm:text-sm rounded-xl  focus:ring-primary focus:border-primary block w-full p-2.5 @error('email') border-red-400 bg-red-100
                                @enderror"
                                    placeholder="name@playfield.com" value="{{ old('email') }}">
                                @error('email')
                                    <div class="mt-2 text-xs font-semibold text-red-400">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-semibold">Password <span
                                        class="text-red-500">*</span></label>
                                <input type="password" name="password" id="password"
                                    class="bg-gray-50 border-2 border-black py-2 text-gray-900 sm:text-sm rounded-xl  focus:ring-primary focus:border-primary block w-full p-2.5 @error('password') border-red-400 bg-red-100
                                @enderror"
                                    placeholder="......">
                                @error('password')
                                    <div class="mt-2 text-xs font-semibold text-red-400">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="name" class="block mb-2 text-sm font-semibold">
                                    Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name"
                                    class="capitalize bg-gray-50 border-2 border-black py-2 text-gray-900 sm:text-sm rounded-xl  focus:ring-primary focus:border-primary block w-full p-2.5 @error('name') border-red-400 bg-red-100
                                @enderror"
                                    placeholder="Name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="mt-2 text-xs font-semibold text-red-400">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="birthdate" class="block mb-2 text-sm font-semibold">
                                    Birthdate <span class="text-red-500">*</span></label>
                                <input type="date" name="birthdate" id="birthdate"
                                    class="bg-gray-50 border-2 border-black py-2 text-gray-900 sm:text-sm rounded-xl  focus:ring-primary focus:border-primary block w-full p-2.5 @error('birthdate') border-red-400 bg-red-100
                                @enderror"
                                    placeholder="first name" value="{{ old('birthdate') }}">
                                @error('birthdate')
                                    <div class="mt-2 text-xs font-semibold text-red-400">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-semibold">
                                    Gender <span class="text-red-500">*</span></label>
                                <ul class="grid gap-6 w-full md:grid-cols-2">
                                    <li>
                                        <input type="radio" id="hosting-small" name="gender" value="Male"
                                            class="hidden peer">
                                        <label for="hosting-small"
                                            class="font-bold inline-flex justify-between items-center text-center py-2 w-full bg-blue border-2 border-black rounded-lg cursor-pointer  peer-checked:border-primary peer-checked:bg-gray-200 peer-checked:text-black hover:text-gray-600 hover:bg-gray-100">

                                            <div class="w-full">MALE</div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="hosting-big" name="gender" value="Female"
                                            class="hidden peer">
                                        <label for="hosting-big"
                                            class="font-bold inline-flex justify-between items-center text-center py-2 w-full bg-pink border-2 border-black rounded-lg cursor-pointer  peer-checked:border-primary peer-checked:bg-gray-200 peer-checked:text-black hover:text-gray-600 hover:bg-gray-100">

                                            <div class="w-full">FEMALE</div>
                                        </label>
                                    </li>
                                </ul>
                                @error('gender')
                                    <div class="mt-2 text-xs font-semibold text-red-400">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit"
                                class="px-5 py-1 bg-primary rounded-xl border-2 border-solid border-black font-extrabold text-base lg:text-xl uppercase hover:bg-purple">Continue</button>
                            <span class="text-center font-bold text-lg lg:text-xl uppercase">or</span>
                            <a href="{{ '/auth/redirect' }}"
                                class="px-5 py-2 bg-white rounded-xl border-2 border-solid border-black font-medium text-sm hover:bg-purple text-center">Continue
                                with Google</a>
                            <p class="text-sm font-medium text-black-500 text-center">
                                Already a member? <a href="/login" class="font-bold text-black-600 hover:underline">Log
                                    in</a>
                            </p>



                        </form>
                    </div>
                </div>

        </section>
    </div>
@endsection
