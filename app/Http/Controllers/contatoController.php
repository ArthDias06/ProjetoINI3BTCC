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
            [ "nome"=>$req['nome'],"cel"=>$req['senha']]];
            return view("contato/index",compact('contatos'));
    }
}
