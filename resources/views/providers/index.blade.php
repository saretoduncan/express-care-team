<x-layoutcomponents.layout :title="'Dashboard'" :users="$user">
    <div class="container mx-auto">
        <section class="m-5">
            <h1 class="font-bold text-xl">Hi! {{ $user->first_name }}</h1>
            <p class="md:text-lg ">Welcome back to your ExpressCareTeam provider dashboard</p>
            
        </section>
        
        <section class="space-y-6 my-3 lg:grid lg:space-y-0  lg:grid-cols-3 ">

            <x-providerDashboardCard class="md:justify-self-end">
                <x-slot:cardTitle>All job postings</x-slot:cardTitle>
                <x-slot:total>0</x-slot:total>
                <x-slot:period>{{ $user->created_at->format('Y-m-d') . ' - ' . date('Y-m-d') }}</x-slot:period>
            </x-providerDashboardCard>

            <x-providerDashboardCard class="md:justify-self-center">
                <x-slot:cardTitle>Total Applications</x-slot:cardTitle>
                <x-slot:total>0</x-slot:total>
                <x-slot:period>{{ $user->created_at->format('Y-m-d') . ' - ' . date('Y-m-d') }}</x-slot:period>
            </x-providerDashboardCard>

            <x-providerDashboardCard>
                <x-slot:cardTitle>Total views</x-slot:cardTitle>
                <x-slot:total>0</x-slot:total>
                <x-slot:period>{{ $user->created_at->format('Y-m-d') . ' - ' . date('Y-m-d') }}</x-slot:period>
            </x-providerDashboardCard>
        </section>
    </div>



</x-layoutcomponents.layout>
