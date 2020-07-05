<?php

namespace App\Http\Controllers;
use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        $artikels = ArtikelModel::get_all();
        
        return view('artikel.index' , compact('artikels'));
    }

        public function create(){
        return view('artikel.form');
    }
    public function store(Request $request){
       
        $data = $request->all();
        // dd($data);
        unset($data["_token"]);
        $artikel = ArtikelModel::save($data);
        
        if($artikel){
            return redirect('/artikel');
        }
        
    }

}