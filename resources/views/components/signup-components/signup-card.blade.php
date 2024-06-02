<section
    {{ $attributes->merge(['class' => 'grid bg-gray-300 p-2 container mx-auto rounded-md  md:p-3 md:grid-cols-3 my-5 relative']) }}>
    <div
        {{ $cover->attributes->merge(['class' => 'absolute top-0 bottom-0 left-0 right-0 bg-black opacity-35 z-[7] rounded-md']) }}>
        $cover</div>
    <section class="">
        <h5 {{ $representationTitle->attributes->merge(['class' => 'text-custom-blue font-bold']) }}>
            {{ $representationTitle }}</h5>
        <p>{{ $representationCaption }}</p>
    </section>
    <section {{ $registrationForm->attributes->merge(['class' => 'col-span-2']) }}>
        {{ $registrationForm }}
    </section>
</section>
