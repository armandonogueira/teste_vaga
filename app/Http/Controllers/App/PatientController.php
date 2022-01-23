<?php

namespace App\Http\Controllers\app;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function list()
    {
        $arrList = Patient::get();
        return view('app.patient-list', [ 'arrList'=>$arrList ]);
    }

    public function create()
    {
        $data = array();
        $data['name'] = '';
        $data['cpf'] = '';
        $data['telephone'] = '';
        $data['email'] = '';
        $data['zipcode'] = '';
        $data['address'] = '';
        $data['number'] = '';
        return view('app.patient-form', ['data'=>$data] );
    }

    public function edit()
    {
        print_r($request);
        die();
        // Get specialty by Doctor
        // $specialty = Patient::find($d['specialty']);

        // Request $request
        $data = array();
        $data['name'] = '';
        $data['cpf'] = '';
        $data['telephone'] = '';
        $data['email'] = '';
        $data['zipcode'] = '';
        $data['address'] = '';
        $data['number'] = '';
        return view('app.patient-form', ['data'=>$data] );
    }

    public function save(Request $request)
    {
        $data = new Patient();
        $data->patient = $request->patient;
        $data->status = $request->status;

        $data->save();

        return redirect('/patient-list');
    }

   
}
