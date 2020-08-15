<?php
namespace App\Http\Services;

use Session;

class CartService{
    public function add($product, $qty)
    {
        if( Session::get("cart.product_{$product->id}") ) {
            $oldQty = Session::get("cart.product_{$product->id}.qty");
            Session::put("cart.product_{$product->id}.qty", $qty + $oldQty);
           
        }
        else{
            Session::put("cart.product_{$product->id}.name", $product->name);
            Session::put("cart.product_{$product->id}.price", $product->price);
            Session::put("cart.product_{$product->id}.img", $product->img);
            Session::put("cart.product_{$product->id}.id", $product->id);
            Session::put("cart.product_{$product->id}.qty", $qty);
        }
        $this->totalSum();
    }

    public function totalSum()
    {
        //dd(session('total'));
        $sum = 0;
        foreach(session('cart') as $product){
            $sum += $product['price'] * $product['qty'];
        }
        Session::put("total", $sum);
    }

    public function clear()
    {
        Session::forget('cart');
        Session::forget('total');
    }

    public function delete($id)
    {
        Session::forget("cart.product_$id");
        $this->totalSum();
    }
}