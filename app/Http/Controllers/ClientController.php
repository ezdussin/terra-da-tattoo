<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use DB;

class ClientController extends Controller
{

    public function index(){
        $dados = DB::table('clients')->get();
        return view('clientes', compact('dados'));
    }

    public function create(Request $request){
        $client = new Client;
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->appointment = $request->input('appointment');
        $client->save();

        return redirect()->back()->withFragment('clients');
    }

    public function delete($id){
        Client::destroy($id);

        return redirect()->back()->withFragment('clients');
    }
}
