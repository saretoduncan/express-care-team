<div {{ $attributes }}>
    <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-bars-progress'" class="{{ request()->routeIs('provider.index') ? 'text-orange-400' : 'text-white' }}" href="{{ route('provider.index') }}">
        <x-slot:linkName >Dashboard</x-slot:linkName>
    </x-navbarcomponents.navlinks>
    <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-network-wired'" class="{{ request()->routeIs('provider.alljobs') ? 'text-orange-400' : 'text-white' }}" href="{{ route('provider.alljobs') }}">
        <x-slot:linkName >All Jobs</x-slot:linkName>
    </x-navbarcomponents.navlinks>
    <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-bell'" class="{{ request()->routeIs('#') ? 'text-orange-400' : 'text-white' }}">
        <x-slot:linkName >Notifications</x-slot:linkName>
    </x-navbarcomponents.navlinks>

</div>
