<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Product::class);
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit');

        return view('admin.pages.products')->with([
            'categories' => Category::get(),
            'products' => Product::query()
                ->with('category')
                ->when($search, fn ($query) => $query
                    ->where('name', 'like', "%$search%")
                    ->orWhere('keyword', 'like', "%$search%")
                    ->orWhere('description', 'like', "%$search%"))
                ->paginate($limit),
        ]);
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        $validated['code'] = Product::generateCustomCode();
        if ($request->file('image')) {

            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('products', $image_value->hashName());
        }

        Product::create($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_active'] = $request->has('is_active');
        if ($request->file('image')) {

            $image_value = $request->file('image');
            $validated['image'] = $image_value->storeAs('products', $image_value->hashName());

            if (Storage::exists($product->getAttribute('image'))) {
                Storage::delete($product->getAttribute('image'));
            }
        }
        $product->update($validated);
        return back()->with('success', trans('admin.notification.success'));
    }

    public function destroy(Product $product): RedirectResponse
    {
        if ($product->delete()) {
            if (Storage::exists($product->getAttribute('image'))) {
                Storage::delete($product->getAttribute('image'));
            }
        }
        return back()->with('success', trans('admin.notification.success'));
    }
}
