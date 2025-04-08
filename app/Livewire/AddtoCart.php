<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class AddtoCart extends Component
{
    public $serviceId;
    public $added= false;
    
    public function mount($serviceId){
        $this->serviceId= $serviceId;
        
        if(Auth::check()){
            $this->added= CartItem::where('user_id',Auth::id())->where('service_id',$this->serviceId)->exists();
        }
    }
    
    public function addtoCart(){
        if(!Auth::check()){
            return redirect()->route('login');
        }
        
        $alreadyInCart= CartItem::where('user_id',Auth::id())->where('service_id',$this->serviceId)->exists();
        
        if(!$alreadyInCart){
            CartItem::create([
                'user_id'=>Auth::id(),
                'service_id'=>$this->serviceId
            ]);
            
            $this->added= true;

            $this->dispatch('cartUpdated');
            
            session()->flash('message','Servizio aggiunto al carrello!');
        }
    }
    
    public function render()
    {
        return view('livewire.addto-cart');
    }
}
