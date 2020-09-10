<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Helloworld extends Component
{
    public $name = 's';

    public function render()
    {
        return view('livewire.helloworld',['name'=>'s',]);
    }
}
