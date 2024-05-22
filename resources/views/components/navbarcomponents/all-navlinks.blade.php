<div {{ $attributes }}>
    <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-house'" :linkName="'Home'" href="{{ route('landingPage.index') }}"
        class="{{ request()->routeIs('landingPage.index') ? 'text-orange-400' : 'text-white' }}" />
    <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-user-nurse'" :linkName="'Caregivers'" href="{{ route('landingPage.caregivers') }}" class="{{ request()->routeIs('landingPage.caregivers') ? 'text-orange-400' : 'text-white' }}" />
    <x-navbarcomponents.navlinks :linkIcon="'fa-solid fa-building-user'" :linkName="'Providers'" href="{{ route('landingPage.providers') }}" class="{{ request()->routeIs('landingPage.providers') ? 'text-orange-400 ' : 'text-white' }}"/>
</div>
