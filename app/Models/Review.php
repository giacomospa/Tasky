<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable= ['user_id','service_id','rating','comment','img_id'];

    // Ogni recensione appartiene ad un utente ed un servizio N-N
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function service() {
        return $this->belongsTo(Service::class);
    } 
}
