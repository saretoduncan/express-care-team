<nav {{ $attributes->merge(['class'=>'relative container  mx-auto h-full grid grid-cols-2 lg:grid-cols-3']) }}>

    <section class="self-center ms-2  lg:justify-self-start lg:ms-2">
        <img src="{{ asset('images/logo.png') }}" alt=" app logo" class="w-[150px]">
    </section>
    <section class="hidden lg:flex lg:self-center lg:space-x-2 justify-self-center ">
        <div class="hidden lg:self-center lg:block">
            <x-navbarcomponents.snowflakes class=" hidden lg:self-center" />
        </div>
        <?-- all navlinks --?>
        <x-navbarcomponents.all-navlinks class="lg:flex lg:space-x-4" />
        <div class="hidden lg:self-center lg:block">
            <x-navbarcomponents.snowflakes class="self-center" />
        </div>

    </section>
    <section class="hidden lg:block  self-center justify-self-end me-2">
        <div class="flex text-xl font-extrabold ">
            <x-navbarcomponents.login-link />
            <x-navbarcomponents.signup-link />
        </div>
    </section>
    <section
        class="self-center justify-self-end me-5 flex mt-2 lg:hidden border-2 border-orange-400 p-1 rounded cursor-pointer"
        id="menuBar">
        <i class="fa-solid fa-bars text-yellow-600 text-[22px] md:text-[28px] "></i>
    </section>

</nav>
