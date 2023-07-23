<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Reciever;

class Sender extends Component
{

    public function send()
    {
        $this->dispatch('send');
    }

    public function render()
    {
        return view('livewire.sender');
    }
}
