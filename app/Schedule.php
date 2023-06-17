<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
     protected $fillable = [
        'Departure_date',
         'Arrival_time',
        'Departure_time',
        'route_id',
         'bus_id'
    ];
    
     public function bus()
    {
         return $this->belongsTo(Bus::class);
    }
     public function route()
    {
        return $this->belongsTo(Route::class);

    }
    public function books()
    {
        return $this->hasMany(Book::class);

    }

    public function payment()
    {
        return $this->hasOne(Payment::class);

    }
}
