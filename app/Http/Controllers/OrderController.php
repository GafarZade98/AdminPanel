<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function view(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.orders')->with([
            'orders' => Order::query()
                ->when($search, fn($query) => $query
                    ->where('name', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function create(Request $request)
    {
        $qty = $request->get('quantity');
        $features = $request->get('features');
        $product_id = $request->get('product_id');
        $order = new Order();
        $order->user_id = auth()->id();
        $order->status = 1;
        $order->save();
        foreach ($product_id as $key => $id) {
            $order->product()->attach($product_id[$key], ['quantity' => $qty[$key], 'features' => $features[$key]]);
        }
        $carts = Cart::where('user_id', auth()->id())->get();
        foreach ($carts as $cart)
        {
            $cart->delete();
        }
        return redirect(route('orders.checkout'));
    }

    public function update(OrderRequest $request, Order $order): RedirectResponse
    {
        $validated = $request->validated();
        $validated['status'] = 2;

        $order->update($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function checkout()
    {
        return view('website.pages.checkout')->with([
            'orders' => Order::where('user_id', auth()->id())->where('status', 1)->first(),
            'shipping' => 7
        ]);
    }
}
