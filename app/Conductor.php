<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    //
     protected $fillable = [
        'C_fname',
        'C_lname',
        'Phone_no',
        'DOB',
        'Address',
        'Gender'
    ];
    public function bus()
    {
        return $this->hasOne(Bus::class,'conductor_id','id');

    }
    public function ticket()
    {
        return $this->hasOne(Ticket::class);

    }
}
