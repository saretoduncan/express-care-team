@vite('resources/js/passwordFn.js')
<div class="relative passwordParent">

    <x-formsComponents.inputs class="w-full password" type="password" name="{{ $pName }}" required
        value="{{ old($pName) }}" :moreClass="$errors->has($pName) ? 'border-red-500' : ''" />
    <button class="absolute right-2 passwordEyeBtn"></button>


</div>
