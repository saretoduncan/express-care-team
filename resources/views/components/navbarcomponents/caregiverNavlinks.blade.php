<div {{ $attributes }}>
    <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-bars-progress'"
        class="{{ request()->routeIs('caregiver.index') ? 'text-orange-400' : 'text-white' }}"
        href="{{ route('caregiver.index') }}">
        <x-slot:linkName>Dashboard</x-slot:linkName>
    </x-navbarcomponents.navlinks>
    <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-network-wired'"
        class="{{ request()->routeIs('caregiver.myjobs') ? 'text-orange-400' : 'text-white' }}"
        href="{{ route('caregiver.myjobs') }}">
        <x-slot:linkName>My Jobs</x-slot:linkName>
    </x-navbarcomponents.navlinks>
    <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-floppy-disk'"
        class="{{ request()->routeIs('caregiver.savedjobs') ? 'text-orange-400' : 'text-white' }}"
        href="{{ route('caregiver.savedjobs') }}">
        <x-slot:linkName>Saved Jobs</x-slot:linkName>
    </x-navbarcomponents.navlinks>

</div>
