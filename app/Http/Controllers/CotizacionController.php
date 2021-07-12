<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;

class CotizacionController extends Controller
{
    public function index(){
        return view('quotation');
    }


    public function store(Request $request){
        $request->validate([
            'ruc' => 'required|min:11|unique:quotations',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|min:9',
            'contact' => 'required',
            'position' => 'required',
            'workers' => 'required|numeric',
            'positions' => 'required'
        ]);

        Quotation::create($request->all());

        return back()->with('notification', 'Se envio correctamente su solicitud.');
    }
}
