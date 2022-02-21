<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function tags(){
        return $this->belongsToMany(tag::class, 'product_tags', 'product_id' , 'tag_id');
    }
    public function Product_image()
    {
        return $this->hasMany(productImage::class,'id_product' , 'id');
    }
    public function Menu()
    {
        return $this->belongsTo(Menu::class,'type_id');
    }
    public function scopeSearch($query){
        if(request('key')){
            $key = request('key');
            $query = $query->where('name','like','%'.$key.'%');
        }
        if(request('cat_id')){
            $query = $query->where('cat_id',request('type_id'));
        }
        return $query;
    }
}
