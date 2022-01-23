<?php

// namespace App\Http\Controllers\app;
// use Illuminate\Http\Request;

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function get_cep (){
        
        $cep = $_REQUEST['cep'];
        
        $reg = simplexml_load_file("http://cep.republicavirtual.com.br/web_cep.php?formato=xml&cep=" . $cep);
        
        $return = array();
        $return['status']   = (string) $reg->resultado;
        $return['address']  = (string) $reg->tipo_logradouro . ' ' . $reg->logradouro;
        $return['district'] = (string) $reg->bairro;
        $return['city']     = (string) $reg->cidade;
        $return['state']    = (string) $reg->uf;
        
        echo json_encode($return);

    }
}
