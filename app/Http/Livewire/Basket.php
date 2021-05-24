<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \Illuminate\Session\SessionManager;
use App\Events\BasketСhanged;

class Basket extends Component
{
    protected $listeners = ['updateBasket'];

    public $items;

    public function updateBasket(){
        $this->items = session('items');
        $this->emitSelf('$refresh');
    }

    public function mount()
    {
        $this->items = session('items');
    }

    public function render()
    {
        return view('livewire.basket');
    }

    public function dublicate()
    {
        BasketСhanged::dispatch($this->items);
    }
}
