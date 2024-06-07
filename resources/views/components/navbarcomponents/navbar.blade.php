@props(['user'])
<nav {{ $attributes->merge(['class' => 'relative container  mx-auto h-full grid grid-cols-2 lg:grid-cols-3']) }}>

    <section class="self-center ms-2  lg:justify-self-start lg:ms-2">
        <img src="{{ asset('images/logo.png') }}" alt=" app logo" class="w-[150px]">
    </section>
    <section class="hidden lg:flex lg:self-center lg:space-x-2 justify-self-center ">
        <div class="hidden lg:self-center lg:block">
            <x-navbarcomponents.snowflakes class="  lg:self-center" />
        </div>
        <?-- all navlinks --?>
        @guest
            <x-navbarcomponents.all-navlinks class="lg:flex lg:space-x-4" />
        @endguest

        @if (isset($user) && $user->roles->contains('role', 'PROVIDER'))
            <x-navbarcomponents.providerNavlinks class="lg:flex lg:space-x-4" />
        @endif

        <div class="hidden lg:self-center lg:block">
            <x-navbarcomponents.snowflakes class="self-center" />
        </div>

    </section>
    <section class="hidden lg:block  self-center justify-self-end me-2 relative">
        @guest
            <div class="flex text-xl font-extrabold ">
                <x-navbarcomponents.login-link />
                <x-navbarcomponents.signup-link />
            </div>
        @endguest
        @auth
            <div>
                <button id="profileBtn" class="rounded-[50%] border border-white py-1 px-2"> <i
                        class="fa-solid fa-user text-xl text-white"></i></button>
            </div>
            <div class="absolute top-[170%] bg-white z-[25]  right-0   overflow-hidden max-h-0 transform ease-in-out  duration-300 "
                id="profileDropDown">
                <div class="w-[200px] border-2 shadow-md p-2 rounded space-y-2">
                    <div class="flex justify-between transform duration-100 hover:text-lg ease-in-out font-bold">
                        <x-navbarcomponents.profile-navlink />
                        <i class="fa-solid fa-angle-right self-center"></i>
                    </div>
                    <div class="flex justify-between transform duration-100 hover:text-lg ease-in-out font-bold">
                        <x-navbarcomponents.logout-navlink />
                        <i class="fa-solid fa-angle-right self-center"></i>
                    </div>
                </div>
            </div>
        @endauth

    </section>
    <section
        class="self-center justify-self-end me-5 flex mt-2 lg:hidden border-2 border-orange-400 p-1 rounded cursor-pointer"
        id="menuBar">
        <i class="fa-solid fa-bars text-yellow-600 text-[22px] md:text-[28px] "></i>
    </section>

</nav>
