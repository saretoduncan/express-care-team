<x-layoutcomponents.layout>
    <x-slot:title>caregiver registration</x-slot:title>
    <div class="px-2 container mx-auto">
        <x-signup-components.signup-titles>
            <x-slot:title>Create a Caregiver's Account</x-slot:title>
            <x-slot:titleCaption>Your dream job is one click away</x-slot:titleCaption>
        </x-signup-components.signup-titles>
        <x-signup-components.signup-card>
            <x-slot:representationTitle>
                Personal Information
            </x-slot:representationTitle>
            <x-slot:representationCaption>
                This information pertain to you as an individual</x-slot:representationCaption>
            <x-slot:registrationForm>
                <form action="" class="bg-gray-50 rounded-md p-2 space-y-2">
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="firstName">First Name</x-formsComponents.labels>
                            <x-formsComponents.inputs id="firstName" name="first_name" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="lastName">Last Name</x-formsComponents.labels>
                            <x-formsComponents.inputs id="lastName" name="last_name" type=tedxt required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">

                        <div class="flex flex-col">
                            <x-formsComponents.labels for="email">Email</x-formsComponents.labels>
                            <x-formsComponents.inputs id="email" name="email" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="password">Password</x-formsComponents.labels>
                            <x-formsComponents.passwordInput :pName="'password'" required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="password">Confirm Password</x-formsComponents.labels>
                            <x-formsComponents.passwordInput :pName="'confirm_password'" required />
                        </div>
                    </div>
                    <div class="h-[1px] bg-gray-300 mt-2"></div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="dob">Date of Birth</x-formsComponents.labels>
                            <x-formsComponents.inputs id="dob" name="date_of_birth" type="date" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="gender">Gender</x-formsComponents.labels>
                            <select class="outline-none  border-2 rounded border-gray-300  bg-white" name="gender"
                                required>
                                <option value disabled selected>Select your gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>

                            </select>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="state">State</x-formsComponents.labels>
                            <x-formsComponents.inputs id="state" name="state" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="city">City</x-formsComponents.labels>
                            <x-formsComponents.inputs id="city" name="city" type=tedxt required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="zipcode">Zipcode</x-formsComponents.labels>
                            <x-formsComponents.inputs id="zipcode" name="zipcode" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="street">Street</x-formsComponents.labels>
                            <x-formsComponents.inputs id="street" name="street" type=tedxt required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="phoneNumber">Phone Number</x-formsComponents.labels>
                            <x-formsComponents.phoneInput />
                        </div>

                    </div>
                    <div class="my-2">
                        <input type="checkbox" name= "terms" id="terms" required>
                        <label for="terms">I agree to all the <a href="#"
                                class="text-custom-blue underline font-bold">Terms and Conditions</a></label>

                    </div>
                    <div>
                        <p>Already have an account? <a href="{{ route('login.index') }}"
                                class="text-custom-blue underline font-bold">Login</a></p>
                    </div>
                    <div class="flex justify-end pe-2 py-6"><button type="submit"
                            class="bg-orange-400 rounded p-2 text-white font-bold">create your account
                        </button></div>

                </form>
            </x-slot:registrationForm>
        </x-signup-components.signup-card>

    </div>
</x-layoutcomponents.layout>
