<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public function index(){
        return view('turno.index');
        
           }
           public function create(){
            return view('turno.create');
        
           }
           public function show($turno){
        
            return view('turnos.show', ['turno' => $turno]);
        
           }
}
