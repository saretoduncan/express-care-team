<x-layoutcomponents.layout>
    <x-slot:title>Provider registration</x-slot:title>
    <div class="px-2 container mx-auto">
        <x-signup-components.signup-titles>
            <x-slot:title class="capitalize">Create a provider's account</x-slot:title>
            <x-slot:titleCaption>Reach top talent and find the right candidate</x-slot:titleCaption>
        </x-signup-components.signup-titles>
        <h5 class="text-center my-2 text-custom-blue font-bold text-xl">step 1 of 2</h5>
        <x-signup-components.signup-card>
            @auth
                <x-slot:cover class=""></x-slot:cover>
            @else
                <x-slot:cover class="hidden"></x-slot:cover>
            @endauth

            <x-slot:representationTitle>
                Home Representative
            </x-slot:representationTitle>
            <x-slot:representationCaption>
                This information pertain to you as a representative of a Home</x-slot:representationCaption>
            <x-slot:registrationForm>
                <form action="" class="bg-gray-50 rounded-md p-2 space-y-2">
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="firstName">First Name<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="firstName" name="first_name" type="text" required
                                :moreClass="$errors->has('first_name') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('first_name')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="lastName">Last Name<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="lastName" name="last_name" type=text required
                                :moreClass="$errors->has('last_name') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('last_name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">

                        <div class="flex flex-col">
                            <x-formsComponents.labels for="email">Email<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="email" name="email" required :moreClass="$errors->has('email') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="password">Password <span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.passwordInput :pName="'password'" required :moreClass="$errors->has('password') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="password">Confirm Password<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.passwordInput :pName="'password_confirmation'" required :moreClass="$errors->has('password_confirmation')
                                ? 'border-red-500 focus:border-red-500'
                                : ''" />
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="my-2">
                        <div>
                            <input type="checkbox" name= "terms" id="terms" required>
                            <label for="terms">I agree to all the <a href="#"
                                    class="text-custom-blue underline font-bold">Terms and Conditions</a>
                            </label>

                        </div>
                        @error('terms')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror

                    </div>
                    <div>
                        <p>Already have an account? <a href="{{ route('login.index') }}"
                                class="text-custom-blue underline font-bold">Login</a></p>
                    </div>
                    <div class="h-[1px] w-full bg-gray-300"></div>
                    <div class="flex justify-end pe-2">
                        <button class="p-2 bg-orange-400 rounded text-white font-bold" type="submit">Next <i
                                class="fa-solid fa-arrow-down animate-bounce"></i></button>
                    </div>

                </form>
            </x-slot:registrationForm>
        </x-signup-components.signup-card>
        <h5 class="text-center my-2 text-custom-blue font-bold text-xl">step 2 of 2</h5>
        <x-signup-components.signup-card>
            @auth       
                <x-slot:cover class="hidden"></x-slot:cover>
                @else
                <x-slot:cover class=""></x-slot:cover>
            @endauth
       


            <x-slot:representationTitle>
                Home Information
            </x-slot:representationTitle>
            <x-slot:representationCaption>
                This information pertain Home facility</x-slot:representationCaption>
            <x-slot:registrationForm>
                <form action="" class="bg-gray-50 rounded-md p-2 space-y-2">
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="homeName">Home Name <span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="homeName" name="home_name" type="text" required
                                :moreClass="$errors->has('home_name') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('home_name')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="website">Website</x-formsComponents.labels>
                            <x-formsComponents.inputs id="website" name="website" type="text" :moreClass="$errors->has('website') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('website')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="workEmail">Work Email<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="workEmail" name="work_email" type="email" required
                                :moreClass="$errors->has('work_email') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('work_email')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="phoneNumber">Phone Number<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.phoneInput :pName="'phone_number'" />
                            @error('phone_number')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="state">State<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="state" name="state" type="text" required
                                :moreClass="$errors->has('state') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('state')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="city">City<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="city" name="city" type="text" required
                                :moreClass="$errors->has('city') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('city')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="zipcode">Zipcode<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="zipcode" name="zipcode" type="text" required
                                :moreClass="$errors->has('zipcode') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('zipcode')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="street">Street<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="street" name="street" type=tedxt required
                                :moreClass="$errors->has('street') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('street')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="homeDescription">Adult Family Home
                                Description<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <textarea
                                class=" border-[2px] border-gray-300  rounded focus:outline-[1px] focus:outline-orange-400 @error('home_description')
                                outline-red-500
                                focus:outline-red-500 
                            @enderror"
                                name="home_description"></textarea>
                            @error('home_description')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>


                    </div>

                    <div class="flex justify-end pe-2 py-6"><button type="submit"
                            class="bg-orange-400 rounded p-2 text-white font-bold ">create your account <i
                                class="fa-solid fa-arrow-right animate-bounce-horizontally mx-2"></i>
                        </button>
                </form>
            </x-slot:registrationForm>
        </x-signup-components.signup-card>
    </div>
</x-layoutcomponents.layout>
