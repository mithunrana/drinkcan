<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    protected $guarded=[];


    public function image(){
        return $this->belongsTo(ProductsImage::class,'FeaturedImage');
    }


    public function ProdutDetails(){
        return $this->belongsTo(products::class,'ProductId');
    }


    public function featuredimage(){
        return $this->belongsTo(ProductsImage::class,'FeaturedImage');
    }
}
