<section class = "grid bg-gray-300 p-2 container mx-auto rounded-md  md:p-3 md:grid-cols-3 my-5 ">
    <section class="">
        <h5 {{ $representationTitle->attributes->merge(['class' => 'text-custom-blue font-bold']) }}>
            {{ $representationTitle }}</h5>
        <p>{{ $representationCaption }}</p>
    </section>
    <section {{ $registrationForm->attributes->merge(['class' => 'col-span-2']) }}>
        {{ $registrationForm }}
    </section>
</section>
