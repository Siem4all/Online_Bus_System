<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
     protected $fillable = [
        'passenger_id',
        'message',
    ];
     public function passenger()
    {
         return $this->belongsTo(Passenger::class);
    }
}
