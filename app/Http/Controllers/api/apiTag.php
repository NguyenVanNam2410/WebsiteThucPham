<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tag;
use App\Models\Product;


class apiTag extends Controller
{
    protected $tag; 
    protected $product; 
    public function __construct(tag $tag, Product $product)
    {
        $this->$tag = $tag;
        $this->$product = $product;
    }
    public function index(Request $request)
    {
        $data = $request->all();
        
        dd($data);
        // $bien = $data[0];

        // $products = $this->product->where('id',$bien)->get();
        // dd($data);
        
        // $query = Product::query();
        // // if(count($data) > 0){
        //     $query->whereHas('tag',function($query) use ($data){
        //         $query->whereIn('tag.id' ,$data);
        //     });
        // // }
        // // $query->latest('id');
        // // dd($query);
        return view('frontend.home.ajaxcheckbox',compact('data','products'));
    }
}
