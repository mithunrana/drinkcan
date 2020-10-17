<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany(AboutProduct::class,'ProductId');
    }

    public function productAboutSingle(){
        return $this->belongsToMany(AboutProduct::class,'ProductId');
    }

}
