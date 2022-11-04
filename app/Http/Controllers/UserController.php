<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request){
        $user = new User;
        $user->name = $request->input('name');
        $user->password = $request->input('password');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back()->withFragment('users');
    }

    public function delete($id){
        Provider::destroy($id);

        return redirect()->back()->withFragment('users');
    }
}
