<nav {{ $attributes->merge(['class' => 'flex flex-col justify-between']) }}>
    <x-navbarcomponents.all-navlinks class=" space-y-5 mt-5" />
    <div class="flex justify-end space-x-4 mb-4 border-t pt-5">

        <div> <x-navbarcomponents.login-link class="text-2xl rounded-md px-6 py-1 font-extrabold" />
        </div>
        <div> <x-navbarcomponents.signup-link class="text-xl rounded-md px-6 py-2 font-extrabold" /></div>




    </div>
</nav>
