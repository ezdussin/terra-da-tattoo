<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{
    public function create(Request $request){
        $provider = new Provider;
        $provider->name = $request->input('name');
        $provider->email = $request->input('email');
        $provider->telephone = $request->input('telephone');
        $provider->cnpj = $request->input('cnpj');
        $provider->address = $request->input('address');
        $provider->save();

        return redirect()->back()->withFragment('providers');
    }

    public function delete($id){
        Provider::destroy($id);

        return redirect()->back()->withFragment('providers');
    }
}
