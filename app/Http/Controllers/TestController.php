<?php

namespace App\Http\Controllers;

use Illuminate\{Http\RedirectResponse, Http\Request};
use App\{Http\Requests\TestRequest, Models\Test};

class TestController extends Controller

{
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
}
