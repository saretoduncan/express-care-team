<x-layoutcomponents.layout>
    <x-slot:title>Provider registration</x-slot:title>
    <div class="px-2 container mx-auto">
        <x-signup-components.signup-titles>
            <x-slot:title class="capitalize">Create a provider's account</x-slot:title>
            <x-slot:titleCaption>Reach top talent and find the right candidate</x-slot:titleCaption>
        </x-signup-components.signup-titles>
        <h5 class="text-center my-2 text-custom-blue font-bold text-xl">step 1 of 2</h5>
        <x-signup-components.signup-card>
            <x-slot:cover class="hidden"></x-slot:cover>
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
                            <x-formsComponents.inputs id="firstName" name="first_name" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="lastName">Last Name<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="lastName" name="last_name" type=tedxt required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">

                        <div class="flex flex-col">
                            <x-formsComponents.labels for="email">Email<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="email" name="email" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="password">Password <span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.passwordInput :pName="'password'" required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="password">Confirm Password<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.passwordInput :pName="'confirm_password'" required />
                        </div>
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
            <x-slot:cover></x-slot:cover>
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
                            <x-formsComponents.inputs id="homeName" name="home_name" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="website">Website</x-formsComponents.labels>
                            <x-formsComponents.inputs id="website" name="website" type="text" />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="workEmail">Work Email<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="workEmail" name="work_email" type="email" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="phoneNumber">Phone Number<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.phoneInput />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="state">State<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="state" name="state" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="city">City<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="city" name="city" type=tedxt required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="zipcode">Zipcode<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="zipcode" name="zipcode" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="street">Street<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="street" name="street" type=tedxt required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="homeDescription">Adult Family Home
                                Description<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <textarea class=" border-[2px] border-gray-300  rounded focus:outline-[1px] focus:outline-yellow-400"
                                name="adultHomeDescription"></textarea>
                        </div>

                    </div>
                    <div class="my-2">
                        <input type="checkbox" name= "terms" id="terms" required>
                        <label for="terms">I agree to all the <a href="#"
                                class="text-custom-blue underline font-bold">Terms and Conditions</a></label>

                    </div>
                    <div class="flex justify-end pe-2 py-6"><button type="submit"
                            class="bg-orange-400 rounded p-2 text-white font-bold">create your account
                        </button>
                </form>
            </x-slot:registrationForm>
        </x-signup-components.signup-card>
    </div>
</x-layoutcomponents.layout>
