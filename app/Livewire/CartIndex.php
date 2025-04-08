<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartIndex extends Component
{
    
    public $cartItems= [];
    
    protected $listeners= ['cartUpdated'=>'loadCartItems'];
    
    public function mount(){
        $this->loadCartItems();
    }
    
    public function loadCartItems(){
        if(Auth::check()){
            $this->cartItems= CartItem::where('user_id',Auth::id())->with('service')->get();
        }
    }
    
    public function removeFromCart($itemId){
        $cartItem= CartItem::where('id',$itemId)->where('user_id',Auth::id())->first();
        
        if($cartItem){
            $cartItem->delete();
            $this->loadCartItems();
            $this->dispatch('cartUpdated');
            session()->flash('message','Servizio rimosso dal carrello!');
        }
    }
    
    public function render()
    {
        return view('livewire.cart-index')->layout('components.layout');
    }
}

