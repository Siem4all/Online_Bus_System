<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankerPayment extends Model
{
    //
    protected $fillable = [
        'user_id',
        'passenger_id',
        'route_id',
        'Bank',
        'System'
    ];
    
     public function passenger()
    {
         return $this->belongsTo(Passenger::class);
    }
     public function route()
    {
         return $this->belongsTo(Route::class);
    }
}
