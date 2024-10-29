<?php

namespace App\Livewire\Learn;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Greeting extends Component
{
    #[Validate('required|min:2')]
    public string $name = '';

    public string $greeting = '';
    public string $grMessage = '';

    public function changeName()
    {
        $this->reset('grMessage');

        $this->validate();

        $this->grMessage = "{$this->greeting}, {$this->name}!";
    }

    public function render()
    {
        return view('learn.greeting');
    }
}
