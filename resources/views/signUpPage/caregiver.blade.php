<x-layoutcomponents.layout>
    <x-slot:title>caregiver registration</x-slot:title>
    <div class="px-2 container mx-auto">
        <x-signup-components.signup-titles>
            <x-slot:title>Create a Caregiver's Account</x-slot:title>
            <x-slot:titleCaption>Your dream job is one click away</x-slot:titleCaption>
        </x-signup-components.signup-titles>
        <x-signup-components.signup-card>
            <x-slot:cover class="hidden"></x-slot:cover>
            <x-slot:representationTitle>
                Personal Information
            </x-slot:representationTitle>
            <x-slot:representationCaption>
                This information pertain to you as an individual</x-slot:representationCaption>
            <x-slot:registrationForm>
                <form action="{{ route('store.caregiver') }}" method="POST" class="bg-gray-50 rounded-md p-2 space-y-2">
                    @csrf
                    @method('POST')
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="firstName">First Name <span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="firstName" name="first_name" type="text" required
                                value="{{ old('first_name') }}" :moreClass="$errors->has('first_name') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('first_name')
                                <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="lastName">Last Name<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="lastName" name="last_name" type=text
                                value="{{ old('last_name') }}" required :moreClass="$errors->has('last_name') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('last_name')
                                <small class="text-red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">

                        <div class="flex flex-col">
                            <x-formsComponents.labels for="email">Email<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="email" name="email" required value="{{ old('email') }}"
                                :moreClass="$errors->has('email') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('email')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="password">Password<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.passwordInput :pName="'password'" required />
                            @error('password')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="password">Confirm Password<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.passwordInput :pName="'password_confirmation'" required />
                            @error('password_confirmation')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="h-[1px] bg-gray-300 mt-2"></div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="dob">Date of Birth<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="dob" name="date_of_birth" type="date"
                                value="{{ old('date_of_birth') }}" required :moreClass="$errors->has('date_of_birth') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('date_of_birth')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="gender">Gender<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <select
                                class="outline-none  border-2 rounded   bg-white @error('gender')
                                border-red-500 focus:border-red-500 @else focus:border-gray-500 border-gray-300 @enderror"
                                name="gender" value="{{ old('gender') }}" required>
                                <option value disabled selected>Select your gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>

                            </select>
                            @error('gender')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="state">State<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="state" name="state" type="text"
                                value="{{ old('state') }}" required :moreClass="$errors->has('state') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('state')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="city">City<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="city" name="city" type=text
                                value="{{ old('city') }}" required :moreClass="$errors->has('city') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('city')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="zipcode">Zipcode<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="zipcode" name="zipcode" type=text
                                value="{{ old('zipcode') }}" required :moreClass="$errors->has('zipcode') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('zipcode')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="flex flex-col">
                            <x-formsComponents.labels for="street">Street<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.inputs id="street" name="street" type=text
                                value="{{ old('street') }}" required :moreClass="$errors->has('street') ? 'border-red-500 focus:border-red-500' : ''" />
                            @error('street')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:space-x-2 space-y-2 md:space-y-0">
                        <div class="flex flex-col">
                            <x-formsComponents.labels for="phoneNumber">Phone Number<span class="text-orange-400">
                                    *</span></x-formsComponents.labels>
                            <x-formsComponents.phoneInput :pName="'phone_number'" />
                            @error('phone_number')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                    <div class="my-2">
                        <div>
                            <input type="checkbox" class="accent-custom-blue shadow-lg shadow-red-500 " name= "terms"
                                id="terms" required>
                            <label for="terms">I agree to all the <a href="#"
                                    class="text-custom-blue underline font-bold">Terms and Conditions</a></label>

                        </div>
                        @error('terms')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror

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
