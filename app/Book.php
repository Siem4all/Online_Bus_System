<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
     protected $fillable = [
        'seat_id',
        'schedule_id',
         'passenger_id'
    ];
     public function seat()
    {
         return $this->belongsTo(Seat::class);
    }
     public function schedule()
    {
         return $this->belongsTo(Schedule::class,'schedule_id','id');
    }

    public function passenger()
    {
         return $this->belongsTo(Passenger::class);
    }

    public function ticket()
    {
        return $this->hasOne(Ticket::class);

    }
}
