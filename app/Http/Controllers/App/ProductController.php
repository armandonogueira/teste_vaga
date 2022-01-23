<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $arrList = Product::get();
        // dd($arrList);
        return view('app.product-list', [ 'arrList'=>$arrList ]);
    }

    public function create()
    {
        return view('app.product-form');
    }

    public function save(Request $request)
    {
        $data = new Product();
        $data->type = $request->type; // padrão, digital, kit, serviço
        $data->name = $request->name;
        $data->code = $request->code;
        $data->url = $request->url;
        $data->alt_name = $request->alt_name;
        $data->weight = $request->weight;
        $data->barcode_symbology = $request->barcode_symbology;
        $data->brand = $request->brand;
        $data->cardnumber = $request->cardnumber;
        $data->healthplan = $request->healthplan;
        $data->telephone = $request->telephone;

        $data->save();

        return redirect('/productlist');
    }
}
