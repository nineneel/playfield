<div class="flex relative min-w-fit">
    <button id="button-nav" class="block absolute right-4 top-4 z-10 lg:hidden" type="button" name="toggler">
        <span class="block w-[35px] h-[3px] bg-black my-2"></span>
        <span class="block w-[35px] h-[3px] bg-black my-2"></span>
        <span class="block w-[35px] h-[3px] bg-black my-2"></span>
    </button>
    <nav id="nav" class="bg-[#F5F5F5] h-full fixed py-8 px-4 hidden lg:flex ">
        <div class="flex flex-col items-stretch w-full">
            <a href="/my-dashboard" class="flex gap-x-3 items-center">
                <img src="@if (auth()->user()->password != 0) {{ asset('storage/' . auth()->user()->details->image) }} @else {{ auth()->user()->details->image }} @endif"
                    alt="avatar" class="border-2 border-black rounded-full w-14 h-14 object-cover">
                <div>
                    <div class="font-semibold text-base capitalize">
                        {{ auth()->user()->name }}</div>
                    <div class="font-semibold text-base capitalize">
                        Age
                        {{ \Carbon\Carbon::parse(auth()->user()->details->birthdate)->diff(\Carbon\Carbon::now())->format('%y') }}
                    </div>
                </div>
            </a>
            <div class="flex gap-4 mt-5">
                <form class="">
                    <input type="search"
                        class="bg-[#D9D9D9] rounded-xl px-4 py-2 text-base font-medium capitalize focus:outline-none focus:border-primary"
                        placeholder="search Friend" />
                </form>
                <button class="">
                    <i data-feather="user"></i>
                </button>
                <button>
                    <a href="/friends" class="">
                        <i data-feather="user-plus"></i>
                    </a>
                </button>
            </div>
            <ul class="mt-10 flex flex-col gap-y-4 overflow-y-auto pr-4">
                @foreach ($users as $elm)
                    <li
                        class="bg border-2 border-yellow  @if ($elm->id == $user->id) bg-orange @else
                        bg-white @endif rounded-lg px-4 py-2.5">
                        <a href="/my-dashboard/conversation/{{ $elm->conversation_id }}"
                            class="flex gap-x-3 items-center">
                            <img src="@if ($elm->password != 0) {{ asset('storage/' . $elm->details->image) }} @else {{ $elm->details->image }} @endif"alt="avatar"
                                class="border-2 border-black rounded-full w-14 h-14 object-cover">
                            <div>
                                <div class="font-semibold text-base capitalize mb-2.5">
                                    {{ $elm->name }}</div>
                                <div class="font-semibold text-sm ">
                                    @if ($elm->messages->last() != null)
                                        {{ $elm->messages->first()->message }}
                                    @else
                                        -
                                    @endif
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>

<script>
    // Toggler
    const buttonNav = document.querySelector("#button-nav");
    const nav = document.querySelector("#nav");

    buttonNav.addEventListener("click", () => {
        nav.classList.toggle("hidden");
    });
</script>
