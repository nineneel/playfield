@extends('userDashboard.myFriend.main')

@section('container')
    @if ($user != null)
        <div class="flex flex-col bg-white mr-3 h-full">
            <header class="fixed w-[calc(100% - 350px)] bg-orange p-5 flex justify-between ml-[350px] right-3 left-0">
                <a href="/" class="flex gap-x-3 items-center">
                    <img src="@if ($user->password != 0) {{ asset('storage/' . $user->details->image) }} @else {{ $user->details->image }} @endif"
                        alt="avatar" class="border-2 border-black rounded-full w-14 h-14 object-cover">
                    <div>
                        <div class="font-bold text-xl capitalize">
                            {{ $user->name }}</div>
                    </div>
                </a>
                <div class="flex gap-8 items-center">
                    <span class="">
                        <i data-feather="search"></i>
                    </span>
                    <button class="">
                        <span class="block w-1.5 h-1.5 bg-black rounded-full mb-1"></span>
                        <span class="block w-1.5 h-1.5 bg-black rounded-full mb-1"></span>
                        <span class="block w-1.5 h-1.5 bg-black rounded-full"></span>
                    </button>
                </div>
            </header>
            <main class="pt-[100px] pb-16 bg-white h-full flex flex-col justify-end">
                <div class="flex flex-col overflow-auto px-5 pb-4 gap-2" id="content_chat">
                    @foreach ($messages as $message)
                        @if ($message->user_id != auth()->user()->id)
                            <div class="flex gap-1 w-full items-end">
                                <p class="pl-2 pr-4 py-1 bg-orange rounded-md font-medium">{{ $message->message }}</p>
                                <span
                                    class="font-semibold text-xs">{{ date('h:m', strtotime($message->updated_at)) }}</span>
                            </div>
                        @else
                            <div class="flex gap-1 w-full items-end justify-end">
                                <span
                                    class="font-semibold text-xs">{{ date('h:m', strtotime($message->updated_at)) }}</span>
                                <p class="pl-4 pr-2 py-1 rounded-md border-2 border-orange font-medium">
                                    {{ $message->message }}</p>
                            </div>
                        @endif
                    @endforeach
                    <div class="bottom"></div>
                </div>
            </main>
            <footer class="bg-orange fixed bottom-0 gap-4 flex px-5 py-2 right-3 left-0 ml-[350px] w-[calc(100% - 350px)]">
                <button>
                    <span class="">
                        <i data-feather="smile"></i>
                    </span>
                </button>
                <button>
                    <span class="">
                        <i data-feather="plus"></i>
                    </span>
                </button>
                <form class="w-full flex gap-4" id="message_form">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" id="user_id">
                    <input type="hidden" name="conversation_id" value="{{ request('id') }}" id="conversation">
                    <input type="text"
                        class="bg-white w-full rounded-lg px-4 py-1.5 text-sm font-medium focus:outline-none focus:border-primary"
                        placeholder="Type a message" name="message" id="message_input" required />
                    <button type="submit">
                        <span class="">
                            <i data-feather="send"></i>
                        </span>
                    </button>
                </form>
            </footer>
        </div>
    @else
        <div class="flex flex-col bg-white mr-3 h-full">

            <main class="pt-[100px] pb-16 bg-white h-full flex flex-col justify-center">
                <div class="flex flex-col overflow-auto px-5 pb-4">
                    <div class="text-center">
                        <span class="px-3 py-1 bg-grey rounded-md font-semibold text-base"> Find Your Friend! <a
                                href="/friends" class="underline text-orange">Here</a> </span>
                    </div>
                </div>
            </main>
        </div>
    @endif
    @vite('resources/js/app.js')
@endsection
