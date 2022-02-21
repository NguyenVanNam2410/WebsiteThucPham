<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ApiController extends Controller
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;

    }
    public function ajaxSearch(){
        $data = $this->product->search()->get();
        // dd($data);
        // $result = [
        //     'status' => true,
        //     'message' => 'Tìm được '.$data->count().' kết quả',
        //     'data' => $data
        // ];
        // dd($data);
        return $data;
    }
}
