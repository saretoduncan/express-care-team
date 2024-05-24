<x-layoutcomponents.layout :title="'Login'">

    <form class="mt-10 mb-5 w-[90%] md:w-[500px] mx-auto  border-orange-400 border-[1px] shadow-lg rounded-md p-8 ">
        <section class="grid  place-content-center">
            <img src="{{ asset('images/logo.png') }}" alt="" class="w-[250px]">
        </section>
        <div class="h-[1px] w-full bg-orange-300 my-3"></div>
        <section>
            <div class="flex flex-col ">
                <x-formsComponents.labels class="text-sm" for="email">Email</x-formsComponents.labels>
                <x-formsComponents.inputs class="" type="email" required />

            </div>
            <div class="flex flex-col ">
                <x-formsComponents.labels class="text-sm" for="password">Password</x-formsComponents.labels>

                <x-formsComponents.passwordInput />

            </div>
        </section>
        <section class="md:flex md:justify-between">
            <div><small class="text-[12px] text-custom-blue"><a href="#">forgot password?</a></small></div>
            <div><small class="text-[12px]">Don't have an account? <a class="text-custom-blue" href="#">sign
                        up</a></small></div>
        </section>
        <div class="mt-4">
            <input type="submit" value="Sign in" class="bg-orange-400 text-white px-2 rounded-sm py-1  font-bold">
        </div>
    </form>


</x-layoutcomponents.layout>
