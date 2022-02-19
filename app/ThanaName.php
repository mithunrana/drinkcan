<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanaName extends Model
{
    protected $guarded=[];

    public function districtDetails(){
        return $this->belongsTo(District::class,'DistrictId');
    }

}
