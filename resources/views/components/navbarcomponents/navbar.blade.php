<nav class="container  mx-auto h-full grid grid-cols-2 lg:grid-cols-3  ">
    <section class="self-center ms-5 flex mt-5 lg:hidden">
        <i class="fa-solid fa-bars text-yellow-600 text-[22px] md:text-[26px] "></i>
    </section>
    <section class="self-center me-2 justify-self-end lg:justify-self-start lg:ms-2">
        <img src="{{ asset('images/logo.png') }}" alt=" app logo" class="w-[150px]">
    </section>
    <section class="hidden lg:flex self-center space-x-2 justify-self-center ">
        <x-navbarcomponents.snowflakes class=" self-center" />
        <div class="flex space-x-4">
            <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-house'" :linkName="'Home'" href="#" />
            <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-user-nurse'" :linkName="'Caregivers'" href="#" />
            <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-building-user'" :linkName="'Providers'" href="#" />
        </div>
        <x-navbarcomponents.snowflakes class="self-center" />
    </section>
    <section class="hidden lg:block  self-center justify-self-end me-2">
        <div class="flex text-xl font-extrabold ">
            <a class="px-2  text-orange-400 bg-white" href="#">login</a>
            <a class="px-2 bg-orange-400 text-white" href="#">Sign Up</a>
        </div>




    </section>


</nav>
