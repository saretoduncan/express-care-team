@props(['moreClass'=>'', 'errName'=>''])
<input
    {{ $attributes->merge(['class' => 'outline-none border-2 border-gray-300  rounded focus:border-orange-400 px-1 '.$moreClass]) }}/>
