<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('contact')]

class Contact extends Component
{
    public function render()
    {
        sleep(3);
        
        return view('livewire.contact');
    }
}
