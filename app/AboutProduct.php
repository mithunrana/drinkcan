<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutProduct extends Model
{
    protected $guarded=[];

    public function ProdutDetails(){
       return $this->belongsTo(products::class,'products_id');
    }


    public function featuredimage(){
        return $this->belongsTo(ProductsImage::class,'FeaturedImage');
    }

}
