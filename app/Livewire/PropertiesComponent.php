<?php

namespace App\Livewire;

use Livewire\Component;

class PropertiesComponent extends Component
{
    public string $value1 = "Valor definido manualmente dentro do componente";
    public string $value3, $value4;

    public function mount($value3, $value4){
        $this->value3 = $value3;
        $this->value4 = $value4;
    }

    public function render()
    {

        $value2 = "Valor definido dentro do render";

        return view('livewire.properties-component', ['value2' => $value2]);
    }
}
