<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function getIndex(){
    	 $products = Product::all();
    	 return view('shops.index',['products'=> $products ]);
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart')? Session::get ('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
        return redirect()->route('product.index');
    }

    public function getKurangiSatuItem($id){
        $oldCart = Session::has('cart')? Session::get ('cart'):null;
        $cart = new Cart($oldCart);
        $cart->kurangiSatuItem($id);

        if (count($cart->items) > 0 ){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');

    }

    public function getHapusSemuaItem($id){
        $oldCart = Session::has('cart')? Session::get ('cart'):null;
        $cart = new Cart($oldCart);
        $cart->hapusSemuaItem($id);

        if (count($cart->items) > 0 ){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getCart(){
        if (!Session::has ('cart')){
            return view('shops.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shops.shopping-cart',['products'=> $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }

    public function  getCheckout(){
        if(!Session::has ('cart')){
            return view('shops.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total= $cart->totalPrice;
        return view('shops.checkout',['total'=> $total]);

    }

    public function postCheckout(Request $request){
        if (!Session::has ('cart')){
            return redirect()->route('shops.shoppingCart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_TDsNXuyxdHHuDjAAWtKqFynU');
        try{
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice*100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test Charge"
            ));
            $order= new Order(); //untuk save order ke database
            $order->cart       = serialize($cart);
            $order->address    = $request->input('address');
            $order->name       = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);
        } catch (\Eexception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }


        Session::forget('cart');
        return redirect()->route('product.index')->with('success','Item Berhasil di beli ');
    }

}
