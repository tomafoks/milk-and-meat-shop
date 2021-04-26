<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        $category = Category::all();
        $cat = $category->pluck('title', 'id')->toArray();
        return view('admin.products.index', compact('products', 'cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['thumbnail'] = Product::uploadImage($request);
        $product = Product::create($data);
        return redirect()->route('products.index')->with('seccess', 'Продукт добавлен!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('title', 'id')->all();
        $product = Product::find($id);
        return view('admin.products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $data = $request->all();
        if($file = Product::uploadImage($request, $product->thumbnail)){
            $data['thumbnail'] = $file;
        }
        foreach (['new', 'hit', 'recommend'] as $fieldName) {
            if (!isset($data[$fieldName])) {
                $data[$fieldName] = 0;
            }
        }
        $product->update($data);
        return redirect()->route('products.index')->with('success', 'Изменения созранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index')->with('success', 'Продукт удален');
    }
}
