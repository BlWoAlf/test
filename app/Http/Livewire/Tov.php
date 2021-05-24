<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\Session\SessionManager;

class Tov extends Component
{
    public $data;

    public function render()
    {
        return view('livewire.tov');
    }

    public function addToBasket(SessionManager $session)
    {
        $session->push('items', $this->data);
        $this->emitTo('basket', 'updateBasket');
    }
}
