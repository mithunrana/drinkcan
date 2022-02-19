<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Order extends Model
{
    protected $guarded=[];
    
    public function ShipingAddress(){
        return $this->hasOne(OrderAddress::class,'OrderID');
    }
    
    public function Details(){
        return $this->hasMany(OrderDetails::class,'OrderID');
    }
    
    
}
