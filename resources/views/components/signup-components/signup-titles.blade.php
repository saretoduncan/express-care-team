<section class="text-center mt-8 space-y-4">
    <h2 {{ $title->attributes->merge(['class' => 'text-orange-400 font-bold text-xl']) }}>{{ $title }}</h2>
    <p {{ $titleCaption->attributes->merge(['class' => 'text-custom-blue']) }}>{{ $titleCaption }}
    </p>
</section>
