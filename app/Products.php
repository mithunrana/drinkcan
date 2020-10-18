<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Products extends Model
{
    protected $guarded=[];

    public function image(){
        return $this->belongsTo(ProductsImage::class,'FeaturedImage');
    }

    public function CategoryDetails(){
        return $this->belongsTo(ProductsPrimaryCategory::class,'Category');
    }

    public function productBrand(){
        return $this->belongsTo(ProductsBrand::class,'BrandId');
    }

    public function productAbout(){
        return $this->hasMany(AboutProduct::class,'products_id');
    }

    public function productFeature(){
        return $this->hasMany(ProductFeature::class,'ProductId');
    }

    public function productAboutSingle(){
       return $this->hasOne(AboutProduct::class,'products_id');
        //return $this->hasOne(AboutProduct::class)->latest()->select('Title','Content');
    }

}
