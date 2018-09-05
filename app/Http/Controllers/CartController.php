<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $product = Product::find($request->id);
        Cart::add([
            'id' => $request->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'qty' => $request->qty
        ]);
        return redirect('/show-cart');
    }
    public function showCart(){
        $cartproducts = Cart::content();
        return view('FrontEnd.cart.show-cart', ['cartproducts' => $cartproducts]);
    }
    public function updateCart(Request $request){
        Cart::update($request->rowId, $request->qty);
        return redirect('/show-cart');
    }
    public function deleteCartItem($rowId){
        Cart::remove($rowId);
        return redirect('/show-cart');
    }
}
