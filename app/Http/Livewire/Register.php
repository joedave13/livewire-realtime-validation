<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

    protected $rules = [
        'name' => ['required', 'string', 'max:255', 'min:3'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];

    public function render()
    {
        return view('livewire.register');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
