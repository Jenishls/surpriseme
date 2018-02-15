<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $data = array(
         
            'products' => $products    
        );

        return view('pages.cart')->with($data);
    }

    public function store(Request $request)
    {
       
        Cart::add(['id' => $request->id, 'name' => $request->name, 'qty' => $request->qty, 'price' => $request->price, 'options' => ['image' => $request->image]]);

    return redirect()->route('cart.index')->with('success','Item was added into your cart'); 
    
    }

    public function empty()
    {
        Cart::destroy();
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success','1 item removed!');
    }
}
