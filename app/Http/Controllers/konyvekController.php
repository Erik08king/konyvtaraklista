<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konyvekModel;

class konyvekController extends Controller
{
    public function konyvek(){
        
        return view('konyvtar');
    }

    public function felvetel(){
        return view('felvetel');
    }

    public function lista(){
        $konyvek = konyvekModel::all();
        return view('lista',['konyvek' => $konyvek]);
    }

    public function modositas(){

    }

    public function torles(){

    }

}
