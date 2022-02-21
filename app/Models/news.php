<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category_new()
    {
        return $this->belongsTo(category_news::class,'new_id', 'id');
    }
}
