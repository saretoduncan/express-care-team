<nav {{ $attributes->merge(['class' => 'flex flex-col justify-between']) }}>
    @guest
        <x-navbarcomponents.all-navlinks class=" space-y-5 mt-5" />
    @endguest
    @auth
        <div>
            <x-navbarcomponents.providerNavlinks />
            <div class="text-white font-bold text-lg mt-1 space-y-2">
                <div class="border-b-2 border-gray-300 py-1 ">
                    <x-navbarcomponents.profile-navlink />
                </div>
                <div class="border-b-2 py-1 border-gray-300">
                    <x-navbarcomponents.logout-navlink />
                </div>
            </div>
        </div>

    @endauth
    @guest
        <div class="flex justify-end space-x-4 mb-4 border-t pt-5">

            <div> <x-navbarcomponents.login-link class="text-2xl rounded-md px-6 py-1 font-extrabold" />
            </div>
            <div> <x-navbarcomponents.signup-link class="text-xl rounded-md px-6 py-2 font-extrabold" /></div>


        </div>
    @endguest

</nav>
