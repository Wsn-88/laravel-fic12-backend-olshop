<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
    public function index()
    {
        {
            $categories = \App\Models\Category::paginate(5);
            return view("pages.category.index", compact("categories"));
        }
    }

    //create
    public function create()
    {
        return view('pages.category.create');
    }

    //store
    public function store(Request $request)
    {
        $data = $request->all();
        Category::create($data);
        return redirect()->route('category.index');
    }

    //edit
    // public function edit($id)
    // {
    //     $category= Category::find($id);
    //     return view('pages.category.edit', compact('category'));
    // }

    //destroy
    public function destroy($id)
    {
        $user = Category::find($id);
        $user->delete();
        Session::flash('alert-danger', 'Data Berhasil Dihapus!');
        return redirect()->route('category.index');
    }
}
