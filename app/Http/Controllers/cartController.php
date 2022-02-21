<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\HomeCart\Cart;
use App\Models\Product;
// use App\HomeCart\Cart;
use App\Cart;
use PHPUnit\Framework\Constraint\Count;
use Session;
// use Illuminate\Contracts\Session\Session;

class cartController extends Controller
{

    protected $products;
    public function __construct(Product $products)
    {
        $this->products = $products;
    }

    public function AddCart(Request $request, $id)
    {
        $product = $this->products->find($id);
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product , $id);
            $request->session()->put('Cart' , $newCart); 
        }
        return view('frontend/home/cart_item');
    }
    public function DeleteItemCart(Request $request, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if(Count ($newCart->products) > 0){
            $request->session()->put('Cart' , $newCart); 
        }
        else{
            $request->session()->forget('Cart'); 
        }
        return view('frontend/home/cart_item');
    }
    public function DeleteListItemCart(Request $request, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if(Count ($newCart->products) > 0){
            $request->session()->put('Cart' , $newCart); 
        }
        else{
            $request->session()->forget('Cart'); 
        }
        return view('frontend/home/list_cart');
    }
}
