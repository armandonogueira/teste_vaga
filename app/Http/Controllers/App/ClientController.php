<?php

namespace App\Http\Controllers\app;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function list()
    {
        $arrList = Client::get();
        // dd($arrList);
        return view('app.client-list', [ 'arrList'=>$arrList ]);
    }

    public function create()
    {
        return view('app.client-form');
    }

    public function save(Request $request)
    {
        $data = new Client();
        $data->name = $request->name;
        $data->birthdate = $request->birthdate;
        $data->gender = $request->gender;
        $data->cpf = $request->cpf;
        $data->rg = $request->rg;
        $data->email = $request->email;
        $data->covenant = $request->covenant;
        $data->cardnumber = $request->cardnumber;
        $data->healthplan = $request->healthplan;
        $data->telephone = $request->telephone;

        $data->save();

        return redirect('/clientlist');
    }


}
