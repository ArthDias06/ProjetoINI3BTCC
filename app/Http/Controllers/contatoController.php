<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    //
    public function index(Request $req){
        //return "Estou no controle !!";
        //dd($req);
        $contatos = [
            [ "tema"=>"Interface acessível","titulo"=>"App mobile com direitos da pessoa deficiente"],
            [ "tema"=>"Pedofilia", "titulo"=>"App mobile com orientações gerais aos pais"]];
            return view("contato/index",compact('contatos'));
    }
}
