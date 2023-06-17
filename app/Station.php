<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    //
     protected $fillable = [
        'Station_name',
         'Station_city'    
    ];
    public function buses()
    {
        return $this->hasMany(Bus::class);

    }
}
