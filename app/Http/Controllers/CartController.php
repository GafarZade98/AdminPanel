<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('website.pages.cart')->with([
            'carts' => Cart::where('user_id', auth()->id())->get(),
            'shipping' => 7,
        ]);
    }

    public function store(CartRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();
        Cart::create($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update($id, $qty)
    {
        $cart = Cart::find($id);
        $cart->quantity = $qty;
        $cart->save();
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return back()->with('success', trans('admin.notification.success'));
    }
}
