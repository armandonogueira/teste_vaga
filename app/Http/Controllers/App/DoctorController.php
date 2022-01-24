<?php

namespace App\Http\Controllers\app;

use App\Models\Doctor;
use App\Models\Specialty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function list( $crm=null )
    {
            $arrListNew = array();
            if( $crm ){
                $arrList =  DB::table('doctor')
                                   ->where('crm', $crm)
                                   ->get();
                $arrList = $arrList[0];

                // Get specialty by Doctor
                $specialty = Specialty::find($arrList->specialty);
                $specialty = $specialty->getAttributes();

                $arrListNew[0]['id'] = $arrList->id;
                $arrListNew[0]['name'] = strtoupper(substr($arrList->name,0,1)).strtolower(substr($arrList->name,1));
                $arrListNew[0]['specialty'] = $specialty['specialty'];
                $arrListNew[0]['crm'] = $arrList->crm;

            }else{
                $arrList = Doctor::get();
                $i=0;
                foreach( $arrList as $d ){
                    $d = $d->getAttributes();
                    
                    // Get specialty by Doctor
                    $specialty = Specialty::find($d['specialty']);
                    $specialty = $specialty->getAttributes();

                    $arrListNew[$i]['id'] = $d['id'];
                    $arrListNew[$i]['name'] = strtoupper(substr($d['name'],0,1)).strtolower(substr($d['name'],1));
                    $arrListNew[$i]['specialty'] = $specialty['specialty'];
                    $arrListNew[$i]['crm'] = $d['crm'];
                    $i++;

                }
            }

            return view('app.doctor-list', [ 'arrList'=>$arrListNew ]);
    }

    public function getDoctor($id){

        $listDoctor =  DB::table('doctor')
                           ->where('specialty', $id)
                           ->get();
        
        $option = "<option value='E'> Selecione </option>";
        foreach( $listDoctor as $d ){

            $option .= "<option value='".$d->id."'>";
            $option .= strtoupper(substr($d->name,0,1)).strtolower(substr($d->name,1));;
            $option .= "</option>";

        }

        echo json_encode( array( 'option' =>$option )  );
    }

    public function create()
    {
        
        $arrSpecialty = array();
        $arrList = Specialty::get();
        
        $i=0;
        foreach( $arrList as $d ){
            $d = $d->getAttributes();
            
            $arrSpecialty[$i]['id'] = $d['id'];
            $arrSpecialty[$i]['specialty'] = strtoupper(substr($d['specialty'],0,1)).strtolower(substr($d['specialty'],1));
            $i++;

        }

        return view('app.doctor-form', [ 'arrSpecialty'=>$arrSpecialty ]);
    }

    public function save(Request $request)
    {
        $data = new Doctor();
        $data->name = $request->name;
        $data->specialty = $request->specialty;
        $data->crm = $request->crm;

        $data->save();

        return redirect('/doctor-list');
    }
}
