<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use DB;

class ClientController extends Controller
{
    public function index(){
        $data = DB::table('clients')->get();
        return view('clients', compact('data'));
    }

    public function create(Request $request){
        $client = new Client;
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->appointment = date('Y-m-d H:i:s', strtotime($request->input('appointment')));
        $client->save();

        return redirect()->back();
    }

    public function delete($id){
        Client::destroy($id);

        return redirect()->back();
    }
}
