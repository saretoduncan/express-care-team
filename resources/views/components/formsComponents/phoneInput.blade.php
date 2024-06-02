@vite('resources/js/phoneNumberFormater.js')

<x-formsComponents.inputs type="tel" id='phoneNumber' class="phoneNumber" name="{{ $pName }}"
    value="{{ old($pName) }}" :moreClass="$errors->has($pName) ? 'border-red-500' : ''" />
