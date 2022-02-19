<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
    protected $guarded=[];
    
    public function DistrictName(){
       return $this->belongsTo(District::class,'City');
    }
}
