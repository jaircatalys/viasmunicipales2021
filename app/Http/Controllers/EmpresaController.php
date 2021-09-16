<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(){
        return view('empresa.index');
        
           }
           public function create(){
            return view('empresa.create');
        
           }
           public function show($empresa){
        
            return view('empresas.show', ['empresa' => $empresa]);
        
           }
}
