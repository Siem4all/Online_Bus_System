<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    //
     protected $fillable = [
        'Departure',
        'Destination',
         'Route_name',
        'Distance',
        'Fare' 
    ];
     public function schedule()
    {
        return $this->hasOne(Schedule::class);

    }
    public function payment()
    {
        return $this->hasOne(Payment::class);

    }
}
