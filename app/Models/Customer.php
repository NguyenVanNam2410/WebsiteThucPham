<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Thanhpho(){
        return $this->belongsTo(Citys::class, 'tp');
    }
    public function QuanHuyen(){
        return $this->belongsTo(Province::class , 'qh');
    }
    public function XaPhuong(){
        return $this->belongsTo(wards::class , 'xp');
    }
}
