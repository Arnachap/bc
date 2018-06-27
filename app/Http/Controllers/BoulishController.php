<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\Service;
use App\ServiceCategory;

class BoulishController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boulish.index');
    }

    public function dishes()
    {
        return view('boulish.dishes');
    }

    public function promotions()
    {
        return view('boulish.promotions');
    }

    public function products()
    {
        $products = Product::all();
        $productCategories = ProductCategory::all();
        
        return view('boulish.products')
            ->with('products', $products)
            ->with('productCategories', $productCategories);
    }

    public function services()
    {
        $services = Service::all();
        $serviceCategories = ServiceCategory::all();
        
        return view('boulish.services')
            ->with('services', $services)
            ->with('serviceCategories', $serviceCategories);
    }
}
