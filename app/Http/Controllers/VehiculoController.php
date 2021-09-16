<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(){
        return view('vehiculo.index');
        
           }
           public function create(){
            return view('vehiculo.create');
        
           }
           public function show($vehiculo){
        
            return view('vehiculos.show', ['vehiculo' => $vehiculo]);
        
           }
}
