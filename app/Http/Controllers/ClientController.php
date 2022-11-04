<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function create(Request $request){
        $client = new Client;
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->appointment = $request->input('appointment');
        $client->save();

        return redirect()->back()->withFragment('clients');
    }

    public function delete($id){
        Provider::destroy($id);

        return redirect()->back()->withFragment('clients');
    }
}
