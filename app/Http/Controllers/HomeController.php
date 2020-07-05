<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        //dd($categories);
        //$products = Product::where('recomended', '=', 1);
        $products = Product::where('recomended', 1)->whereNotNull('img')->get(); //аналогичная запись
        //dd($products);
        return view('home.index', compact('categories', 'products'));
    }
}
