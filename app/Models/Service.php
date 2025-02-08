<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    protected $fillable= ["name","description","img","price"];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
