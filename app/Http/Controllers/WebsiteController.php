<?php

namespace App\Http\Controllers;

use Illuminate\{Http\RedirectResponse, Http\Request, Support\Facades\Auth};
use App\{Http\Requests\TestRequest, Models\Category, Models\Product, Models\Test};

class WebsiteController extends Controller

{
    public function products(Request $request, $slug)
    {
//        $categoryFilter = $request->get('category_id');
//        $size = $request->get('size');
//        $color = $request->get('color');
//        $price = $request->get('price');
        $search = $request->get('search');
        $limit = $request->get('limit', 1);

        $category = Category::where('slug', $slug)->first();

        $products = Product::active()->when($search, function ($query) use ($search) {
            $query->where('keyword', $search)
            ->orWhere('name' ,'like','%'.$search.'%')
            ->orWhere('description' ,'like','%'.$search.'%');
        })->when($slug, function ($query) use ($category) {
            $query->where('category_id', $category->id);
        }
        )->paginate($limit);

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

    public function allProducts(Request $request)
    {
        $search = $request->get('search');
        $limit = $request->get('limit', 12);

        $products = Product::active()->when($search, function ($query) use ($search) {
            $query->where('keyword', $search)
                ->orWhere('name' ,'like','%'.$search.'%')
                ->orWhere('description' ,'like','%'.$search.'%');
        });

        if ($request->get('sort') == 'name'){
            $products->orderBy('name');
        }elseif ($request->get('sort') == 'price') {
            $products->orderBy('price');
        }

        return view('website.pages.products')->with([
            'products' => $products->paginate($limit),
            'categories' => Category::active()->whereNull('category_id')->get()
        ]);
    }

    public function about()
    {
        return view('website.pages.about');
    }

    public function contact()
    {
        return view('website.pages.contact');
    }

    public function homepage()
    {
        return view('website.pages.homepage');
    }

    public function login()
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

    public function register()
    {
        return view('website.components.register');
    }

    public function privacy()
    {
        return view('website.pages.privacy');
    }

    public function terms()
    {
        return view('website.pages.terms');
    }

    public function account()
    {
        return view('website.pages.account');
    }

    public function wishlist()
    {
        return view('website.pages.wishlist')->with([
            'products' => Product::active()->paginate(12),
            'categories' => Category::active()->whereNull('category_id')->get()
        ]);
    }

    public function faqs()
    {
        return view('website.pages.faqs');
    }
}
