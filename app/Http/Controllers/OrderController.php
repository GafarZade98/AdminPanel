<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Order::class);
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.orders')->with([
            'orders' => Order::query()
                ->when($search, fn ($query) => $query
                    ->where('name', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function store(OrderRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        if ($request->file('image')) {

            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('orders', $image_value->hashName());
        }

        Order::create($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(OrderRequest $request, Order $order): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');

        $order->update($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Order $order): RedirectResponse
    {
        $order->delete();
        return back()->with('success', trans('admin.notification.success'));
    }
}
