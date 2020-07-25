<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }
    // GET|HEAD  | admin/category/create | category.create  | App\Http\Controllers\Admin\CategoryController@create | App\Http\Middleware\EncryptCookies

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {

        /* $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;

        $img = $request->file('file');
        if ($img) {
            $fName = $img->getClientOriginalName();
            $img->move( public_path('uploads'), $fName );
            $category->img = '/uploads/' . $fName;
        }
        $category->save(); */

        $category = Category::create( $request->all() );

        return redirect(route('category.index'))
        ->with('success', 'Category ' . $category->name . ' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, $id)
    {
        /* $request->validate([
            'name' => 'required|unique:categories,name,'.$id.'|max:64',
            'slug' => 'nullable|unique:categories,name,'.$id.'|max:128',
            'img' => 'nullable|mimes:jpeg,bmp,png',
        ]); */

        $category = Category::findOrFail($id);
        $category->update( $request->all() );
        return redirect(route('category.index'))
        ->with('success', 'Category ' . $category->name . ' updated!');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return back();
    }
}
