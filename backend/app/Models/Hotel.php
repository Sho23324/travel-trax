<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    protected $fillable = [
         'destination_id','name', 'description', 'location', 'image'
    ];

    public function reviews():HasMany {
        return $this->hasMany(Review::class);
    }

}
