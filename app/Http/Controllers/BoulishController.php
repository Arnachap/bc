<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\Service;
use App\ServiceCategory;
use App\DailyMeal;
use App\Promotion;

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

    public function meals()
    {
        $dailyMeals = DailyMeal::orderBy('date', 'asc')->get();

        return view('boulish.meals')
            ->with('dailyMeals', $dailyMeals);
    }

    public function promotions()
    {
        $promotions = Promotion::all();

        return view('boulish.promotions')
            ->with('promotions', $promotions);
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
