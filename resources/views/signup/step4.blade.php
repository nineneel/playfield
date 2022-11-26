@extends('signup.main')

@section('container')
    <div class="bg-login-image bg-cover bg-repeat-y bg-center min-h-screen w-full h-full -z-10 ">
        <section class="our-container py-10">
            <div class="min-h-screen flex justify-center items-center">
                <div
                    class="w-full flex flex-col justify-center bg-white border-4 border-black rounded-[40px] mt-5 sm:max-w-xl lg:px-14">
                    <div class="p-6 sm:p-8">
                        <div class="flex flex-col items-center mb-5">
                            <h3 class="font-bold text-2xl text-center mb-1 uppercaselg:text-4xl">Tell Us Do You Have <br />
                                Any Allergies</h3>
                        </div>

                        <form action="/signup_4" method="POST" class="flex flex-col gap-4">
                            @csrf
                            <input type="hidden" value="{{ session('user_id') }}" name="user_id">

                            <ul class="grid gap-6 w-full md:grid-cols-3">
                                @foreach ($items as $item)
                                    <li>
                                        <input type="checkbox" id={{ $item['name'] }}
                                            value="{{ strtolower($item['name']) }}" class="hidden peer" name="allergies[]">
                                        <div class="w-full text-lg font-semibold text-center">{{ $item['name'] }}</div>
                                        <label for={{ $item['name'] }}
                                            class="flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border-2 border-black cursor-pointer  peer-checked:bg-primary dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-200">
                                            <div class="flex items-center">
                                                <img src="{{ $item['image'] }}" alt="{{ $item['image'] }}">
                                            </div>
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                            <button type="submit"
                                class="px-5 py-1 bg-primary rounded-xl border-2 border-solid border-black font-extrabold text-base lg:text-xl uppercase hover:bg-purple">Continue</button>

                        </form>
                    </div>
                </div>

        </section>
    </div>
@endsection
