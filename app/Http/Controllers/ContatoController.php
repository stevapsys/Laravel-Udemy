<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato; 

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
           (object) ["nome"=>"Maria", "tel"=> "6666666"],
           (object) ["nome"=>"Pedro", "tel"=> "6664444"],

        ];
        $contato = new Contato();
        
        dd($contato->lista());

        return view('/contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        dd($req->all());
        return "Esse é o Index do ContatoController";
    }

    public function editar()
    {
        return "Esse é o Index do ContatoController";
    }


}
