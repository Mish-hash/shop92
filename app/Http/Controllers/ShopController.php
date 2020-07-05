<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ShopController extends Controller
{
    public function category($slug)
    {
        //Category::where('slug', $slug)->first();
        //Category::firstWhere('slug', $slug); // для ларавель 7х
        $category = Category::firstWhere('slug', $slug);//для ларавель 5х
        //dd($category);
        $products = Product::where('category_id', $category->id)->get();
        
        return view('shop.category', compact('category', 'products'));
    }
}
