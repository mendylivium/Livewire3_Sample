<?php

namespace App\Livewire;

use Livewire\Component;

class Reciever extends Component
{

    #[On('send')]
    public function recieve()
    {
        dd('Test');
    }

    public function render()
    {
        return view('livewire.reciever');
    }
}
