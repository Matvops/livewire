<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class FullPage extends Component
{
    #[Title("LAYOUT 1")]
    public function render()
    {
        return view('livewire.full-page')->layout('components/layouts/new');
    }
}
