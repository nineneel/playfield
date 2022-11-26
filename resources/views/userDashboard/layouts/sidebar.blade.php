<div class="flex relative min-w-fit">
    <button id="button-nav" class="block absolute right-4 top-4 z-10 lg:hidden" type="button" name="toggler">
        <span class="block w-[35px] h-[3px] bg-black my-2"></span>
        <span class="block w-[35px] h-[3px] bg-black my-2"></span>
        <span class="block w-[35px] h-[3px] bg-black my-2"></span>
    </button>
    <nav id="nav" class="bg-grey h-full fixed py-8 px-4 hidden lg:flex">
        <div class="flex flex-col items-stretch w-full">
            <a href="/" class="flex gap-x-3 items-center">
                <img src="@if (auth()->user()->password != 0) {{ asset('storage/' . auth()->user()->details->image) }} @else {{ auth()->user()->details->image }} @endif"alt="avatar"
                    class="border-2 border-black rounded-full w-14 h-14 object-cover">
                <div>
                    <div class="font-semibold text-base capitalize">
                        {{ auth()->user()->name }}</div>
                    <div class="font-semibold text-base capitalize">
                        Age
                        {{ \Carbon\Carbon::parse(auth()->user()->details->birthdate)->diff(\Carbon\Carbon::now())->format('%y') }}
                    </div>
                </div>
            </a>
            <ul class="mt-10 flex flex-col gap-y-4">
                <li>
                    <a href="#"
                        class="flex gap-x-2 items-center px-3 py-2 rounded-lg pr-16 {{ Request::is('my-dashboard') ? 'bg-green' : 'bg-green/30' }}">
                        <i data-feather="user" class="w-6 h-6"></i>
                        <span class="font-semibold text-base">My account</span>
                    </a>
                </li>
                <li>
                    <a href="/my-dashboard/orders"
                        class="flex gap-x-2 items-center px-3 py-2 rounded-lg pr-16 {{ Request::is('my-dashboard/orders*') ? 'bg-green' : 'bg-green/30' }}">
                        <i data-feather="edit" class="w-6 h-6"></i>
                        <span class="font-semibold text-base">My order</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex gap-x-2 items-center px-3 py-2 rounded-lg pr-16 bg-green/30">
                        <i data-feather="bell" class="w-6 h-6"></i>
                        <span class="font-semibold text-base">My notification</span>
                    </a>
                </li>
                <li>
                    <a href="/my-dashboard/friends"
                        class="flex gap-x-2 items-center px-3 py-2 rounded-lg pr-16 {{ Request::is('my-dashboard/friends*') ? 'bg-green' : 'bg-green/30' }}">
                        <i data-feather="message-circle" class="w-6 h-6"></i>
                        <span class="font-semibold text-base">My friend</span>
                    </a>
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="w-full flex gap-x-2 items-center px-3 py-2 pr-16 rounded-lg bg-green/30"><i
                                data-feather="log-out" class="w-6 h-6"></i>
                            <span class="font-semibold text-base">Logout</span></button>
                    </form>
                </li>
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
