<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function products() {
        $products = Product::all();

        return view('pages.products')->with('products', $products);
    }

    public function service() {
        return view('pages.service');
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }
}
