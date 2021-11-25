<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipodecargasController extends Controller
{
    public function index(){
        return view('tipodecarga.index');
        
    }
    public function create(){
        return view('tipodecarga.create');
    }
    public function show($tipodecarga){
        return view('tipodecarga.show', ['tipodecarga' => $tipodecarga]);
    }
}
