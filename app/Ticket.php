<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = [
        'book_id',
        //'schedule_id',
        //'bus_id',
        //'seat_id'
        //'route_id',
        //'conductor_id'
    ];
    public function book()
    {
         return $this->belongsTo(Book::class);
    }
     
}
