<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    //
    protected $fillable = [
        'p_code',
        'P_fname',
        'P_lname',
        'Phone_no',
        'DOB',
        'Address',
        'Gender',
        'Status',
        'user_id',
    ];
     
     public function bus()
    {
         return $this->belongsTo(Bus::class);
    }
     public function user()
    {
         return $this->belongsTo(User::class);
    }
    public function seat()
    {
         return $this->hasOne(Seat::class);
    }
     public function payment()
    {
        return $this->hasOne(Payment::class);

    }
    public function message()
    {
        return $this->hasOne(Message::class);

    }
     public function book()
    {
        return $this->hasOne(Book::class);

    }
    public function ticket()
    {
        return $this->hasOne(Ticket::class);

    }
}
