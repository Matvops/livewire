<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class FullPage extends Component
{
    public $value1, $value2, $sum;

    public function mount($value1, $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->sum = $value1 + $value2;
    }


    #[Title("LAYOUT 1")]
    public function render()
    {
        return view('livewire.full-page')->layout('components/layouts/new');
    }
}
