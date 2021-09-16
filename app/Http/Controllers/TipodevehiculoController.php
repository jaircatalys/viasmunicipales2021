<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipodevehiculoController extends Controller
{
    public function index(){
        return view('tipodevehiculo.index');
        
           }
           public function create(){
            return view('tipodevehiculo.create');
        
           }
           public function show($tipodevehiculo){
        
            return view('tipodevehiculos.show', ['tipodevehiculo' => $tipodevehiculo]);
        
           }
}
