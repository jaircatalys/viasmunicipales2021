<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReciboController extends Controller
{
    public function index(){
        return view('recibo.index');
        
           }
           public function create(){
            return view('recibo.create');
        
           }
           public function show($recibo){
        
            return view('recibos.show', ['recibo' => $recibo]);
        
           }
}
