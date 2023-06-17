<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    //
     protected $fillable = [
        'Bus_name',
        'Bus_model',
        'Bus_number',
        'Bus_status',
        'Total_seat',
         'station_id',
         'driver_id',
         'conductor_id'
    ];
    
     public function seats()
    {
        return $this->hasMany(Seat::class);

    }
     public function schedule()
    {
        return $this->hasOne(Schedule::class);

    }
     public function station()
    {
         return $this->belongsTo(Station::class);
    }
     public function driver()
    {
         return $this->belongsTo(Driver::class);
    }
     public function conductor()
    {
         return $this->belongsTo(Conductor::class);
    }
}
