<?php

namespace App\Http\Controllers;

use Illuminate\Http\{RedirectResponse, Request};
use App\Http\Requests\OrderRequest;
use App\Models\{Cart, Order};

class OrderController extends Controller
{
    public function view(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.orders')->with([
            'orders' => Order::query()
                ->when($search, fn($query) => $query
                    ->where('name', 'like', "%$search%")
                    ->orWhere('code', 'like', "%$search%")
                    ->orWhere('phone', 'like', "%$search%")
                    ->orWhere('city', 'like', "%$search%")
                )
                ->paginate($limit),
        ]);
    }

    public function myOrders()
    {
        return view('website.pages.my-orders')->with([
            'orders' => Order::where('user_id', auth()->id())->orderBy('status')->get()]);
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
        $validated['code'] = Order::generateCustomCode();

        $order->update($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function checkout()
    {
        return view('website.pages.checkout')->with([
            'orders' => Order::where('user_id', auth()->id())->where('status', 1)->OrderByDesc('id')->first(),
            'shipping' => 7
        ]);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return back()->with('success', trans('admin.notification.success'));

    }
}
