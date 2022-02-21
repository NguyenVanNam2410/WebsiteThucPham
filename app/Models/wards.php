<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wards extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name_xahuyen', 'type','maqh'
    ];
    protected $primaryKey = 'xaid';
    protected $table = 'devvn_xaphuongthitran';
}
