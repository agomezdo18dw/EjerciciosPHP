<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index()
    {
        $users = User::all();
        return view('adminHome', compact('users'));//"Soy Administrador";
    }

    public function changeRol(Request $request, $id)
    {
        $user = User::where("id", $id)->first();
        $user->role = $request->get('role');
        $user->save();

        return redirect(route('admin'));
    }
}
