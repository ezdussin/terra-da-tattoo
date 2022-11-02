<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function insertProvider(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $telephone = $request->input('telephone');
        $cnpj = $request->input('cnpj');
        $address = $request->input('address');

        $data = array(
            'name' => $name, 
            'email' => $email, 
            'telephone' => $telephone,
            'cnpj' => $cnpj, 
            'address' => $address
        );

        DB::table('provider')->insert($data);

        return Redirect::back();
    }
}
