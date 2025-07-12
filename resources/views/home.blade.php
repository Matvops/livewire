<x-layouts.main_layout>
    <x-slot:content>

        <h1 class="display-6 text-center">LIVEWIRE</h1>
        <hr>

        <livewire:counter />

        @php
            $dynamic = "DYNA";    
        @endphp

        <h1 class="mt-5">INLINE</h1>
        <livewire:inline-component value="Matth" :dynamicValue="$dynamic"/>

        <hr>

        <livewire:properties-component value3="VALOR CONSTANTE" :value4="$dynamicController" />
    </x-slot:content>
</x-layouts.main_layout>