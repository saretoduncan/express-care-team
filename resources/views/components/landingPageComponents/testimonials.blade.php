<div
    {{ $attributes->merge(['class' => 'absolute w-full min-h-[180px] bg-custom-blue mx-auto rounded-md px-5  transition-all duration-1000 ease-in-out']) }}>
    <section class="py-3 space-y-2">
        <img src="{{ asset($testimonialImg) }}" alt=""
            class="rounded-full border-2 border-orange-400 w-[50px] h-[50px] mx-auto ">
        <p class="text-center text-orange-400 font-bold">{{ $userName }}</p>
    </section>
    <section>
        <p class="text-white text-center text-sm">{{ $testimonial }}</p>
    </section>
</div>
