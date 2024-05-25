<div 
    {{ $attributes->merge(['class'=>'border-gray-200 rounded-md  space-y-4 py-5 px-1 lg:w-[500px] lg:justify-center border shadow-md shadow-orange-400']) }}>
    <section class="grid place-items-center space-y-2">
        <div>
            {{-- <i class="fa-solid fa-user-nurse text-[80px] text-orange-400"></i> --}}
            {{ $titleIcon }}
        </div>
        <h3 class="font-bold text-custom-blue text-xl">{{ $title }}</h3>
        {{ $titleCaption }}
        {{-- <p class="text-center text-custom-blue">Are you looking for your dream job? <br> Create a unique career profile with Express Care Team</p> --}}
        <button class="bg-orange-400 text-white rounded-md px-2 py-1">{{ $buttonContent }}</button>
    </section>

</div>
