<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'passenger_id',
        'schedule_id',
        'status'
    ];
    
     public function passenger()
    {
         return $this->belongsTo(Passenger::class);
    }
     public function schedule()
    {
         return $this->belongsTo(Schedule::class);
    }
}
