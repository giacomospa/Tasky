<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartIcon extends Component
{

    public $hasItems= false;
    
    protected $listeners= ['cartUpdated'=>'checkCart'];

    public function mount(){
        $this->checkCart();
    }

    public function checkCart(){
        $this->hasItems= Auth::check() && CartItem::where('user_id',Auth::id())->exists();
    }

    public function render()
    {
        return view('livewire.cart-icon');
    }
}
