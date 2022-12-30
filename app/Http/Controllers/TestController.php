<?php

namespace App\Http\Controllers;

use Illuminate\{Http\RedirectResponse, Http\Request};
use App\{Http\Requests\TestRequest, Models\Product, Models\Test};

class TestController extends Controller

{
    public function products(Request $request, $category_id)
    {
        $category = $request->get('category_id');
        $products = Product::active()
            ->when($category,function ($query) use ($category)
        {
            $query->where('category_id', $category);
        })->when($category_id,function ($query) use ($category_id)
        {
            $query->where('category_id', $category_id);
        }
        )->get();
        return view('website.pages.products')->with([
            'products' => $products
        ]);
    }

    public function product(Request $request)
    {
        return view('website.pages.product');
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
        return view('website.pages.wishlist');
    }

    public function cart(Request $request)
    {
        return view('website.pages.cart');
    }

    public function partners(Request $request)
    {
        return view('website.pages.partners');
    }
}
