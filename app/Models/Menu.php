<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function menu_child(){
        return $this->hasMany(Menu::class, 'parent_id');
    }
    public function pro_post(){
        return $this->hasMany(Product::class , 'type_id');
    }
}
