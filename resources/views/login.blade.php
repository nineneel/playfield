@extends('signup.main')

@section('container')
    <div class="bg-login-image bg-cover bg-no-repeat bg-center w-full h-full -z-10">
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
                                    class="font-medium">Login Failed!</span> {{ $message }}
                            </div>
                        @enderror
                        @error('login_first')
                            <div class="bg-green py-3 px-4 text-teal-800 font-regular mb-4 text-sm rounded-lg"><span
                                    class="font-medium"> {{ $message }}</span> to book learning kits!
                            </div>
                        @enderror
                        @if (session()->has('success'))
                            <div class="bg-green py-3 px-4  text-teal-800 font-regular mb-4 text-sm rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="/login" method="POST" class="flex flex-col gap-y-4 ">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-semibold">Email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border-2 border-black text-gray-900 sm:text-sm rounded-xl py-2 focus:ring-primary focus:border-primary @error('email') border-red-400 bg-red-100
                                @enderror block w-full p-2.5"
                                    placeholder="name@playfield.com" value="{{ old('email') }}">
                                @error('email')
                                    <div class="mt-2 text-xs font-semibold text-red-400">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-semibold">Password</label>
                                <input type="password" name="password" id="password"
                                    class="bg-gray-50 border-2 border-black text-gray-900 sm:text-sm rounded-xl py-2 focus:ring-primary focus:border-primary block w-full p-2.5 @error('password') border-red-400 bg-red-100 @enderror"
                                    placeholder="........" value="{{ old('password') }}">
                                @error('password')
                                    <div class="mt-2 text-xs font-semibold text-red-400">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="font-semibold text-gray-500">Remember me</label>
                                    </div>
                                </div>
                                <a href="#" class="text-sm font-semibold text-primary-600 hover:underline ">Forgot
                                    password?</a>
                            </div>
                            <button type="submit"
                                class="px-5 py-1 bg-primary rounded-xl border-2 border-solid border-black font-extrabold text-base lg:text-xl uppercase hover:bg-purple">Sign
                                In</button>
                            <span class="text-center font-bold text-lg lg:text-xl uppercase">or</span>
                            <a href="{{ '/auth/redirect' }}"
                                class="px-5 py-2 bg-white rounded-xl border-2 border-solid border-black font-medium text-sm hover:bg-purple text-center">Sign
                                In
                                with Google</a>
                            <p class="text-sm font-medium text-black-500 text-center">
                                Don’t have an account yet? <a href="/signup"
                                    class="font-bold text-black-600 hover:underline">Sign up</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
