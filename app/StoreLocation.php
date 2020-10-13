<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreLocation extends Model
{
    protected $guarded=[];


    public function thanaDetails(){
        return $this->belongsTo(ThanaName::class,'ThanaId');
    }

}
