<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NacionalidadController extends Controller
{
    public function index(){
        return view('nacionalidad.index');
        
           }
           public function create(){
            return view('nacionalidad.create');
        
           }
           public function show($nacionalidad){
        
            return view('nacionalidades.show', ['nacionalidad' => $nacionalidad]);
        
           }
}
