<?php

namespace App\Http\Controllers\app;

use App\Models\Specialty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function list()
    {
        $arrListNew = array();
        $arrList = Specialty::get();
        $i=0;
        foreach( $arrList as $d ){
            $d = $d->getAttributes();

            $arrListNew[$i]['id'] = $d['id'];
            $arrListNew[$i]['specialty'] = strtoupper(substr($d['specialty'],0,1)).strtolower(substr($d['specialty'],1));
            $arrListNew[$i]['status'] = $d['status'] == 'A' ? 'Ativo' : 'Inativo';
            $i++;

        }

        return view('app.specialty-list', [ 'arrList'=>$arrListNew ]);
    }

    public function create()
    {
        return view('app.specialty-form');
    }

    public function save(Request $request)
    {
        
        

        $data = new Specialty();
        $data->specialty = $request->specialty;
        $data->status = $request->status;

        $data->save();

        return redirect('/specialty-list');
    }


    public function getByID($array){
        
        $listData = Specialty::whereIn("id", $array)->get();
        
        echo "<pre>";
        print_r($listData);
        echo "</pre>";
        die();


    }
}
