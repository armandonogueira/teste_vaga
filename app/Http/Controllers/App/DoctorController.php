<?php

namespace App\Http\Controllers\app;

use App\Models\Doctor;
use App\Models\Specialty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function list( $json=null, $id=null )
    {
        if( $id ){
            $listDoctor = Doctor::find($id);
            foreach( $listDoctor as $d ){
                $d = $d->getAttributes();
                
                $arrListNew[$i]['id'] = $d['id'];
                $arrListNew[$i]['name'] = strtoupper(substr($d['name'],0,1)).strtolower(substr($d['name'],1));
                $i++;
    
            }
           echo json_encode( array( 'listDoctor' =>$arrListNew )  );
        }else{
                
            $arrListNew = array();
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
            return view('app.doctor-list', [ 'arrList'=>$arrListNew ]);
        }
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
