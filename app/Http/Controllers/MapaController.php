<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapaController extends Controller
{
    
    public function mapa(){
        
        return view('painel.mapas.index');
    }
}
