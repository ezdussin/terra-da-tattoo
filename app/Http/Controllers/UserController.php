<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function index(){
        $data = DB::table('users')->get();
        return view('users', compact('data'));
    }

    public function create(Request $request){
        $user = new User;
        $user->name = $request->input('name');
        $user->password = $request->input('password');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back();
    }

    public function delete($id){
        User::destroy($id);

        return redirect()->back();
    }
}
