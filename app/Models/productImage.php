<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productImage extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function setFilenamesAttribute($value)
    {
        $this->attributes['image'] = json_encode($value);
    }
}
