<?php

namespace App\Livewire;

use Livewire\Component;

class TestComponent extends Component
{

    public $message = '';

    public function sendMessage()
    {
        $this->message = "Livewire esta funcionando correctamente";
    }
    public function render()
    {
        return view('livewire.test-component');
    }
}
