<?php

namespace App\Http\Controllers;

use Illuminate\{Http\RedirectResponse, Http\Request, Support\Facades\Auth};
use App\{Http\Requests\TestRequest, Models\Category, Models\Product, Models\Test};

class TestController extends Controller

{
    public function products(Request $request, $slug)
    {
        $categoryFilter = $request->get('category_id');
        $size = $request->get('size');
        $color = $request->get('color');
        $price = $request->get('price');
        $search = $request->get('search');
        $limit = $request->get('limit', 1);

        $category = Category::where('slug', $slug)->first();

        $products = Product::active()->when($categoryFilter, function ($query) use ($categoryFilter) {
            $query->where('category_id', $categoryFilter);
        })->when($slug, function ($query) use ($category) {
            $query->where('category_id', $category->id);
        }
        )->paginate($limit);
//        ->where('name', 'like', "%$search")
//        ->orWhere('keyword', 'like', "%$search%")
//        ->orWhere('description', 'like', "%$search%")

        return view('website.pages.products')->with([
            'products' => $products,
            'categories' => Category::active()->whereNull('category_id')->get()
        ]);
    }

    public function product(Request $request ,$code)
    {
        return view('website.pages.product')->with([
            'product' => Product::where('code', $code)->first(),
            'topProducts' => Product::active()->inRandomOrder(10)->get()
        ]);
    }

    public function allProducts()
    {
        return view('website.pages.products')->with([
            'products' => Product::active()->paginate(12),
            'categories' => Category::active()->whereNull('category_id')->get()
        ]);
    }

    public function about(Request $request)
    {
        return view('website.pages.about');
    }

    public function contact(Request $request)
    {
        return view('website.pages.contact');
    }

    public function homepage(Request $request)
    {
        return view('website.pages.homepage');
    }

    public function login(Request $request)
    {
        return view('website.components.login');
    }
    public function userLogin(Request $request)
    {
        $request->flash();


        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::attempt($credentials, $remember_me)) {
            return redirect()->intended(route('homepage'));
        }
        return back()->with('error', 'Hatalı Kullanıcı');
    }

    public function register(Request $request)
    {
        return view('website.components.register');
    }

    public function blogs(Request $request)
    {
        return view('website.pages.blogs');
    }

    public function blog(Request $request)
    {
        return view('website.pages.blog');
    }

    public function privacy(Request $request)
    {
        return view('website.pages.privacy');
    }

    public function terms(Request $request)
    {
        return view('website.pages.terms');
    }

    public function contract(Request $request)
    {
        return view('website.pages.contract');
    }

    public function account(Request $request)
    {
        return view('website.pages.account');
    }

    public function wishlist(Request $request)
    {
        return view('website.pages.wishlist')->with([
            'products' => Product::active()->paginate(12),
            'categories' => Category::active()->whereNull('category_id')->get()
        ]);
    }

    public function faqs(Request $request)
    {
        return view('website.pages.faqs');
    }
}
