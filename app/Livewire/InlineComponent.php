<?php

namespace App\Livewire;

use Livewire\Component;

class InlineComponent extends Component
{

    public string $name = "Matheus";
    public string $value, $dynamicValue;

    public function mount($value, $dynamicValue) {
        $this->value = $value;
        $this->dynamicValue = $dynamicValue;
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            <p class="display-6 text-center text-info">CONTEÚDO INLINE</p>
            <p class="display-6 text-center text-info">NOME: <strong class="text-danger">{{ $name }}</strong></p>
            <p class="display-6 text-center text-info">VALUE: <strong class="text-danger">{{ $value }}</strong></p>
            <p class="display-6 text-center text-info">DYNAMIC VALUE: <strong class="text-danger">{{ $dynamicValue }}</strong></p>
        </div>
        HTML;
    }
}
