<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //index
    public function index()
    {
        $products = DB::table('products');
        $products = Product::paginate(5);
        return view('pages.product.index', compact('products'));
    }

    //create
    public function create()
    {
        $categories = Category::all();
        return view('pages.product.create', compact('categories'));
    }

    //store
    public function store(Request $request)
    {
        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/products', $filename);

        $product = new Product;
        $product->name = $request->name;
        $product->price = (int) $request->price;
        $product->stock = (int) $request->stock;
        $product->category_id = $request->category_id;
        $product->image = $filename;
        $product->save();
        Session::flash('alert-success', 'Data Berhasil Disimpan!');
        return redirect()->route('product.index');
    }

    //edit
    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.product.edit', compact('product'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = Product::find($id);
        $product->update($data);
        return redirect()->route('product.index');
    }

    //destroy
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Session::flash('alert-danger', 'Data Berhasil Dihapus!');
        return redirect()->route('product.index');
    }
}
