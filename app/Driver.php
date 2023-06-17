<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    protected $fillable = [
        'D_fname',
        'D_lname',
        'Phone_no',
        'DOB',
        'Address',
        'Gender',
    ];
    public function bus()
    {
        return $this->hasOne(Bus::class,'driver_id','id');

    }
}
