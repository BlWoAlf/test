<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TextContent extends Component
{
    public $text;

    public function render()
    {
        return view('livewire.text-content');
    }
}
