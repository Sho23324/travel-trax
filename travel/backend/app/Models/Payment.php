<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'trip_id', 'amount', 'payment_method', 'payment_data', 'transaction_id'
    ];
}
