<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $guarded=[];

    public function ProdutDetails(){
        return $this->belongsTo(products::class,'ProductId');
    }
}
