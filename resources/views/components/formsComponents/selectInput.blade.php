<select {{ $attributes->merge(['class' => 'rounded outline-none py-1 border focus:border-orange-400']) }}>
    {{ $slot }}
</select>
