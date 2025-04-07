<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    
    protected $fillable= ['user_id','service_id'];
    
    // Relazione con il servizio
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    
    // Relazione con l'utente
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

