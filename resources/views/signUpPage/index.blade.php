<x-layoutcomponents.layout :title="'Register'">
    <div class="">
        <h3 class="text-custom-blue font-bold capitalize text-center text-xl mt-8">Create your account</h3>
        <section class="my-8 px-2 grid gap-y-4 md:gap-y-0 md:gap-3  md:grid-cols-2   ">
            <x-signup-components.index-signupCard class="justify-self-end">
                <x-slot:titleIcon><i class="fa-solid fa-user-nurse text-[80px] text-orange-400"></i> </x-slot>
                <x-slot:title>Caregiver</x-slot>
                <x-slot:titleCaption>
                    <p class="text-center text-custom-blue">Are you looking for your dream job? <br> Create a unique
                        career profile with Express Care Team</p>
                </x-slot>
                <x-slot:buttonContent href="{{ route('signup.caregiver') }}">Sign up as caregiver</x-slot>
            </x-signup-components.index-signupCard>
            <x-signup-components.index-signupCard>
                <x-slot:titleIcon><i class="fa-solid fa-hospital-user text-[80px] text-orange-400"></i> </x-slot>
                <x-slot:title>Provider</x-slot>
                <x-slot:titleCaption>
                    <p class="text-center text-custom-blue">Are you looking for quality candidates? <br> Advertise
                        and
                        search with Express Care Team</p>
                </x-slot>
                <x-slot:buttonContent href="{{ route('signup.provider') }}">Sign up as provider</x-slot>
            </x-signup-components.index-signupCard>

        </section>
    </div>
</x-layoutcomponents.layout>
