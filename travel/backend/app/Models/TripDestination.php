<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripDestination extends Model
{
    protected $fillable = [
        'trip_id', 'destination_id'
    ];
}
