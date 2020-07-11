<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class MainController extends Controller
{
    public function index()
    {
        /* $product = Product::find(41);
        dd($product->category->name); */

        /* $category = Category::find(41);
        dd($category->products->count()); */




        $categories = Category::with('products')->get();
        //dd($categories);
        //$products = Product::where('recomended', '=', 1);
        $products = Product::with('category')->where('recomended', 1)->whereNotNull('img')->get(); //аналогичная запись
        //dd($products);
        return view('home.index', compact('categories', 'products'));
    }

    public function contacts() {
        return view('home.contacts');
    }

    public function getContacts(Request $request) {

        $name = $request->name;
        //$mes = $request->message;

        $category = new Category();
        $category->name = $name;
        $category->slug = \Str::slug($name, '-');
        $category->save();
        return redirect('/');
        //return back();
    }
}
