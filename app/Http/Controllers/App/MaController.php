<?php

namespace App\Http\Controllers\app;

use App\Models\Ma;
use App\Models\Specialty;
use App\Models\Doctor;
use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaController extends Controller
{
    public function list()
    {
        $arrListNew = array();
        $arrList = Ma::get();
        $i=0;
        foreach( $arrList as $d ){
            $d = $d->getAttributes();
            
            // Get specialty
            $specialty = Specialty::find($d['specialty']);
            $specialty = $specialty->getAttributes();

            // Get Doctor
            $doctor = Doctor::find($d['doctor']);
            $doctor = $doctor->getAttributes();

            // Get Patient
            $patient = Patient::find($d['patient']);
            $patient = $patient->getAttributes();

            $arrListNew[$i]['id'] = $d['id'];
            $arrListNew[$i]['specialty'] = $specialty['specialty'];
            $arrListNew[$i]['doctor'] = $doctor['name'];
            $arrListNew[$i]['patient'] = $patient['name'];
            $arrListNew[$i]['birthdate'] = $d['birthdate'];
            $arrListNew[$i]['responsible_name'] = !empty($d['responsible_name']) ? $d['responsible_name'] : ' - ';
            $arrListNew[$i]['responsible_cpf'] = !empty($d['responsible_cpf']) ? $d['responsible_cpf'] : ' - ';
            $arrListNew[$i]['medicalappointment'] = $d['medicalappointment'];
            $arrListNew[$i]['ma_created'] = $d['created_at'];
            $i++;

        }

        return view('app.ma-list', [ 'arrListNew'=>$arrListNew ]);
    }

    public function create()
    {
        return view('app.ma-form');
    }

    public function save(Request $request)
    {
        $data = new Specialty();
        $data->specialty = $request->specialty;
        $data->status = $request->status;

        $data->save();

        return redirect('/ma-list');
    }
}
