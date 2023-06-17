<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //
    protected $fillable = [
        'Seat_no',
        'bus_id',
        'schedule_id',
        'passenger_id'
    
       
    ];
    public function bus()
    {
         return $this->belongsTo(Bus::class);
    }
    public function passenger()
    {
         return $this->belongsTo(Passenger::class);
    }
     public function book()
    {
        return $this->hasOne(Book::class);

    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);

    }

    public function ticket()
    {
        return $this->hasOne(Ticket::class);

    }
}
