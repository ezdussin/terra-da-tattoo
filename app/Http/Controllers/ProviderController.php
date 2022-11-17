<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
use DB;

class ProviderController extends Controller
{
    public function index(){
        $data = DB::table('providers')->get();
        return view('providers', compact('data'));
    }

    public function create(Request $request){
        $provider = new Provider;
        $provider->name = $request->input('name');
        $provider->email = $request->input('email');
        $provider->telephone = $request->input('telephone');
        $provider->cnpj = $request->input('cnpj');
        $provider->address = $request->input('address');
        $provider->save();

        return redirect()->back();
    }

    public function delete($id){
        Provider::destroy($id);

        return redirect()->back();
    }
}
