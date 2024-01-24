<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //index
    public function index(Request $request)
    {
        $users = DB::table('users')
            ->when($request->input('name') , function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->paginate(5);
        return view('pages.user.index', compact('users'));
    }

    //create
    public function create()
    {
        return view('pages.user.create');
    }

    //store
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->input('password'));
        User::create($data);
        Session::flash('alert-success', 'Data Berhasil Disimpan!');
        return redirect()->route('user.index');
    }

    //edit
    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.user.edit', compact ('user'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = User::find($id);
        if ($request->input('password') ) {
        $data['password'] = Hash::make($request->input('password'));
        }else{
            $data['password'] = $user->password;
        }
        $user->update($data);
        Session::flash('alert-success', 'Data Berhasil Disimpan!');
        return redirect()->route('user.index');
    }

    //destroy
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('alert-danger', 'Data Berhasil Dihapus!');
        return redirect()->route('user.index');
    }
}
