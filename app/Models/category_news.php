<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_news extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function News_post(){
        return $this->hasMany('App\Models\news' , 'new_id', 'id');
    }
}
