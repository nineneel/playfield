    <!-- Header Start -->
    <header
        class="bg-white fixed top-0 left-0 w-full flex justify-center z-50 border-y-4 border-solid border-black xl:px-28">
        <div class="container">
            <div class="flex items-center justify-between px-4 lg:px-0 py-3 relative">
                <ul class="flex gap-x-8 items-center">
                    <li>
                        <a href="/">
                            <img src="/img/logo.svg" alt="Play Field Logo" class="h-14 block" />
                        </a>
                    </li>
                    <li class="hidden lg:block">
                        <form class="relative">
                            <input type="search"
                                class="border-2 border-black rounded-2xl px-4 py-2 text-base font-medium capitalize focus:outline-none focus:border-primary w-64 2xl:w-[464px] peer"
                                placeholder="search..." />
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 peer-focus:hidden">
                                <i data-feather="search"></i>
                            </span>
                        </form>
                    </li>
                </ul>
                <div class="flex items-center px-4 py-6 lg:py-0 lg:px-0 lg:pl-4">
                    <button id="button-nav" class="block absolute right-4 lg:hidden" type="button" name="toggler">
                        <span class="block w-[35px] h-[3px] bg-black my-2"></span>
                        <span class="block w-[35px] h-[3px] bg-black my-2"></span>
                        <span class="block w-[35px] h-[3px] bg-black my-2"></span>
                    </button>
                    <nav class="hidden justify-center absolute right-2 left-2 top-full bg-white rounded-lg shadow-lg border-2 border-solid border-black mt-2 my-4 lg:flex lg:static lg:border-none lg:shadow-none lg:rounded-none lg:my-0 lg:mt-0"
                        id="nav">
                        <ul class="p-4 flex flex-col items-center lg:flex-row lg:gap-x-12 lg:p-0 xl:gap-x-12">
                            <li class="my-2">
                                <a href="/products" class="text-base font-extrabold uppercase">Learning Kit</a>
                            </li>
                            <li class="my-2">
                                <a href="/friends" class="text-base font-extrabold uppercase">My Friends</a>
                            </li>

                            <li class="my-2 mt-4 lg:mt-2">
                                @guest
                                    <a href="/login"
                                        class="px-5 py-2 bg-primary rounded-2xl border-2 border-solid border-black font-extrabold text-base uppercase hover:bg-purple">Sign
                                        In</a>
                                @else
                                    @can('isUser')
                                        <a href="/my-dashboard" class="flex gap-x-3 items-center group">
                                            <img src="@if (auth()->user()->password != 0) {{ asset('storage/' . auth()->user()->details->image) }} @else {{ auth()->user()->details->image }} @endif"
                                                alt="avatar"
                                                class="border-[1px] border-black rounded-full w-12 h-12 group-hover:opacity-85 object-cover">
                                            <span class="h-[2.5rem] w-[2px] block bg-black group-hover:bg-black/50"></span>
                                            <div class="font-bold text-md capitalize group-hover:text-black/50">
                                                Hello, {{ auth()->user()->name }}</div>
                                        </a>
                                    @endcan
                                    @can('isAdmin')
                                        <a href="/admin/dashboard" class="flex gap-x-3 items-center group">
                                            <div class="font-bold text-md capitalize group-hover:text-black/50">
                                                Hello, admin</div>
                                        </a>
                                    @endcan
                                @endguest
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
