<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $guarded=[];


    public function ProductDetails(){
        return $this->belongsTo(Products::class,'ProductId');
    }



}
