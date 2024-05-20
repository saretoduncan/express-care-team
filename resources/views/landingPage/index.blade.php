<x-layoutcomponents.layout>
    <section class="mt-2 mx-2 border-4 border-custom-blue rounded-sm relative">
        <x-landingPageComponents.landingCourosel />
    </section>
    <section class="grid  space-y-5 md:grid-cols-3 justify-center max-w-[500px] mx-auto my-5 ">

        <x-landingPageComponents.jobMatches :numberOfJobMatches="'100000+'" :jobMatchesContent="'Jobs'" class="self-center" />
        <x-landingPageComponents.jobMatches :numberOfJobMatches="'50000+'" :jobMatchesContent="'Matches made'" />
        <x-landingPageComponents.jobMatches :numberOfJobMatches="'100000+'" :jobMatchesContent="'Caregivers'" class="self-center" />
    </section>
    <section class="grid bg-custom-blue w-full py-9 ">
        <div class="grid md:grid-cols-2 px-9">
            <section class="grid place-content-center  place-items-center md:place-items-end">
                <img src="{{ asset('images/landing-seven.webp') }}" class="w-[340px] lg:w-[60%] rounded-lg" alt="">
            </section>
            <section class="md:pl-8 md:self-center">
                <x-landingPageComponents.chooseUsTitleItem class="text-center md:text-start  text-2xl">Why
                    Caregivers
                    Love
                    Us</x-landingPageComponents.chooseUsTitleItem>
                <ul class="text-white list-disc lg:text-[16px] md:text-[14px] ">
                    <li>We help caregivers grow their careers & showcase their skills & qualifications to potential
                        employers.</li>
                    <li>Say goodbye to cover letters - your profile is all you need. Your next job is one click away
                    </li>
                    <li>Find a job that is consistent, rewarding and reflective of your skill set</li>
                    <li>Open up a whole new world of opportunity and posiblities</li>
                </ul>
            </section>
        </div>
        <div class="grid md:grid-cols-2 px-9 mt-5">

            <section class="flex flex-col justify-center md:pl-8">
                <x-landingPageComponents.chooseUsTitleItem class="text-centern md:text-start  text-2xl">Why Providers
                    Choose Us</x-landingPageComponents.chooseUsTitleItem>
                <ul class="text-white list-disc lg:text-[16px] md:text-[14px] ">
                    <li>Browse through caregivers' profiles based on category and salary expectation</li>
                    <li>Find qualified candidates for your company.
                    </li>
                    <li>contact ONLY caregivers who already have what you are looking for instead of going through
                        hundreds of applications</li>

                </ul>
            </section>
            <section class="grid place-content-center  place-items-center md:place-items-start">
                <img src="{{ asset('images/landing-eight.webp') }}" class="w-[340px] lg:w-[60%] rounded-lg"
                    alt="">
            </section>
        </div>
    </section>
</x-layoutcomponents.layout>
