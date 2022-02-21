<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = ['id_customer','total_price' ,'note'];
    public function customer_item(){
        return $this->belongsTo(Customer::class,'id_customer','id');
    }
    public function customer_bill(){
        return $this->hasMany(bill_detail::class,'id_bill','id');
    }
}
