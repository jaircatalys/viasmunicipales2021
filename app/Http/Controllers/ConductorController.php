<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function index(){
        return view('conductor.index');
        
           }
           public function create(){
            return view('conductor.create');
        
           }
           public function show($conductor){
        
            return view('conductores.show', ['conductor' => $conductor]);
        
           }
}
