<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginForm extends Form
{
    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    public function store()
    {
        if(Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'The provide credential do not match our records.'
        ]);
    }
}
