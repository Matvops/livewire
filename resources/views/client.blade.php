<x-layouts.main_layout>
    <x-slot:content>

        <div>
            <h1 class="display-6 mb-2">CLIENTES</h1>
            <hr>

            @foreach ($clients as $client)
                <livewire:client :$client :key="$client['id']"/>        
            @endforeach
        </div>

    </x-slot:content>
</x-layouts.main_layout>