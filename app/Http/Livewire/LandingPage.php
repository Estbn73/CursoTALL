<?php

namespace App\Livewire;

use App\Models\Subscriber;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class LandingPage extends Component
{
    public $email;
    
    protected $rules = [
        'email' => 'required|email:filter|unique:subscribers,email',
    ];
    
    public function registro()
    {

        Log::info('Metodo registro ejecutado');
        $this ->validate();
        
        Subscriber::create([
            'email' => $this->email,
        ]);
        
        $this->reset('email');

    }
    public function render()
    {
        return view('livewire.landing-page2');
    }
}
