<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceFilter extends Component
{
    
    public $search= "";
    public $minPrice;
    public $maxPrice;
    
    public function render()
    {
        $query = Service::query();
        
        if (!empty(trim($this->search))) {
            $query->where("name", "like", "%" . trim($this->search) . "%");
        }
        
        if (!is_null($this->minPrice) && is_numeric($this->minPrice)) {
            $query->where("price", ">=", $this->minPrice);
        }
        
        if (!is_null($this->maxPrice) && is_numeric($this->maxPrice)) {
            $query->where("price", "<=", $this->maxPrice);
        }
        
        return view('livewire.service-filter', [
            "services" => $query->get()
        ]);
    }
    
}
