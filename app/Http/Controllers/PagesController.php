<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\Service;
use App\ServiceCategory;
use App\DailyMeal;

class PagesController extends Controller
{
    public function index() {
        $dailyMeals = DailyMeal::orderBy('date', 'asc')->get();

        return view('pages.index')
            ->with('dailyMeals', $dailyMeals);
    }

    public function products() {
        $products = Product::all();
        $productCategories = ProductCategory::all();

        return view('pages.products')
            ->with('products', $products)
            ->with('productCategories', $productCategories);
    }

    public function service() {
        $services = Service::all();
        $serviceCategories = ServiceCategory::all();

        return view('pages.service')
            ->with('services', $services)
            ->with('serviceCategories', $serviceCategories);
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }
}
