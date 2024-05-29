<x-layoutcomponents.layout :title="'caregiver registration'">
    <div class="px-2 container mx-auto">
        <section class="text-center mt-8 space-y-4">
            <h2 class="text-orange-400 font-bold text-xl">Create a Caregiver's Account</h2>
            <p class="text-custom-blue">Your dream job is one click away</p>
        </section>
        <section class = "grid bg-gray-300 p-2 container mx-auto rounded-md  md:p-3 md:grid-cols-3 ">
            <section class="">
                <h5 class="text-custom-blue font-bold">Personal Information</h5>
                <p>This information pertain to you as an individual</p>
            </section>
            <section class="col-span-2">
                <form action="" class="bg-gray-50 rounded-md p-2">
                    <div class="md:grid md:grid-cols-2 md:space-x-2">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="firstName">First Name</x-formsComponents.labels>
                            <x-formsComponents.inputs id="firstName" name="first_name" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="lastName">Last Name</x-formsComponents.labels>
                            <x-formsComponents.inputs id="lastName" name="last_name" type=tedxt required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2">

                        <div class="flex flex-col">
                            <x-formsComponents.labels for="email">Email</x-formsComponents.labels>
                            <x-formsComponents.inputs id="email" name="email" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="password">Password</x-formsComponents.labels>
                            <x-formsComponents.passwordInput :pName="'password'" required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="password">Confirm Password</x-formsComponents.labels>
                            <x-formsComponents.passwordInput :pName="'confirm_password'" required />
                        </div>
                    </div>
                    <div class="h-[1px] bg-gray-300 mt-2"></div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="dob">Date of Birth</x-formsComponents.labels>
                            <x-formsComponents.inputs id="dob" name="date_of_birth" type="date" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="gender">Gender</x-formsComponents.labels>
                            <select class="outline-none  border-2 rounded border-gray-300  bg-white" name="gender">
                                <option value disabled selected>Select your gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>

                            </select>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="state">State</x-formsComponents.labels>
                            <x-formsComponents.inputs id="state" name="state" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="city">City</x-formsComponents.labels>
                            <x-formsComponents.inputs id="city" name="city" type=tedxt required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="zipcode">Zipcode</x-formsComponents.labels>
                            <x-formsComponents.inputs id="zipcode" name="zipcode" type="text" required />
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="street">Street</x-formsComponents.labels>
                            <x-formsComponents.inputs id="street" name="street" type=tedxt required />
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="phoneNumber">Phone Number</x-formsComponents.labels>
                            <x-formsComponents.phoneInput/>
                        </div>

                    </div>
                </form>
            </section>
        </section>
    </div>
</x-layoutcomponents.layout>
