<div {{ $attributes->merge(['class' => 'border  border-gray-300 text-center  p-5 mx-2 space-y-4 rounded-md shadow-md shadow-orange-400 lg:w-[300px] lg:mx-0 xl:w-[400px]']) }}>
    <h3 {{ $cardTitle->attributes->merge(['class' => 'text-lg']) }}>{{ $cardTitle }}</h3>
    <p {{ $total->attributes->merge(['class' => 'font-bold text-3xl']) }}>{{ $total }}</p>
    <p {{ $period->attributes->merge(['class' => 'text-sm']) }}>{{ $period }}</p>
</div>
