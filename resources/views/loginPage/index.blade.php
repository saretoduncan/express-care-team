<x-layoutcomponents.layout :title="'Login'">

    <form action="{{ route('login') }}" method="POST"
        class="mt-10 mb-5 w-[90%] md:w-[500px] mx-auto  border-orange-400 border-2 shadow-lg shadow-orange-400 rounded-md p-8 ">
        @csrf()
        @method('POST')
        <section class="grid  place-content-center">
            <img src="{{ asset('images/logo.png') }}" alt="" class="w-[250px]">
        </section>
        <div class="h-[1px] w-full bg-orange-300 my-3"></div>
        <section>
            <div class="flex flex-col ">
                <x-formsComponents.labels class="text-sm" for="email">Email</x-formsComponents.labels>
                <x-formsComponents.inputs  type="email" name='email'
                  :moreClass="$errors->has('email')?'border-red-500':''"  value="{{old('email')}}" />
                @error('email')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror

            </div>
            <div class="flex flex-col ">
                <x-formsComponents.labels class="text-sm" for="password">Password</x-formsComponents.labels>

                <x-formsComponents.passwordInput :pName="'password'" />
                @error('password')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror



            </div>
        </section>
        <section class="md:flex md:justify-between">
            <div><strong class="text-[14px] text-custom-blue"><a href="#">forgot password?</a></strong></div>
            <div><strong class="text-[14px]">Don't have an account? <a class="text-custom-blue" href="#">sign
                        up</a></strong></div>
        </section>
        <div class="mt-4">
            <input type="submit" value="Sign in" class="bg-orange-400 text-white px-2 rounded-sm py-1  font-bold">
        </div>
    </form>


</x-layoutcomponents.layout>
