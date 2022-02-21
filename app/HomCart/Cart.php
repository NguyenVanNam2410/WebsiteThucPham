<?php
namespace App\HomeCart;
class Cart{
    public $products = null;
    public $TotalPrice = 0;
    public $TotalQuanity = 0;
    public function __construct($cart)
    {
        if($cart){
            $this->products =  $cart->products;
            $this->TotalPrice = $cart->TotalPrice;
            $this->TotalQuanity = $cart->TotalQuanity;
        }
    }

    public function AddCart($product ,$id)
    {
        $newProduct = ['quanity' => 0, 'price' => $product->price , 'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                $newProduct = $this->products[$id];
            }            
        }
        $newProduct['quanity']++;
        if($product->sale == 0){
            $newProduct['price'] = $newProduct['quanity'] * $product->price;
        }
        else{
            $newProduct['price'] = $newProduct['quanity'] * ((100-$product->sale) * $product->price / 100);
        }
        $this->products[$id]  =  $newProduct;
        $this->TotalPrice += $product->price;
        $this->TotalQuanity++;
    }
}
?>