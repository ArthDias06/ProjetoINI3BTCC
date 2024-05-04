<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $rows = Curso::all();
        return view('admin.cursos.index', compact('rows'));
    }
    public function aicionar(){
        return view('admin.cursos.adicionar');
    }
    public function salvar(Request $req){
        return "Aqui eu salvo";
    }
    public function editar($id) {
        $linha = Curso::find($id);
        return view('admin.cursos.editar',compact('linha'));
    }
    public function excluir($id) {  
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }
}
