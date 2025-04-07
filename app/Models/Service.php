<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    protected $fillable= ["name","description","img","price","producer"];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relazione 1-N con le reviews
    public function reviews() {
        return $this->hasMany(Review::class);
    }
 
    // Relazione N-N con utenti
    public function favoriteByUsers()
    {
        return $this->belongsToMany(User::class);
    }

    // Relazione 1-N con CartItems
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}


