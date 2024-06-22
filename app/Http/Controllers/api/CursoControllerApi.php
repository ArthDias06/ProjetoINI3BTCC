<?php

namespace App\Http\Controllers\api;

use App\Models\Curso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoControllerApi extends Controller
{
    public function store(Request $req) {
        $novoCurso = Curso::create($req->all());
        return response($novoCurso,201);
    }

    public function index() {
        return Curso::all();
        }
        
        public function show($id) {
        $curso = Curso::find($id);
        if ( $curso <> null ) { // status http 200 se OK,
        return response($curso,200);
        } else { return response(''
        
        ,404); } // 404 se não encontrou
        
        }
        
        public function update(Request $req, $id) {
            if ( Curso::find($id)->update($req->all()) ) {
                return response('OK',200);
            } else { return response('',404); }
        }

        public function destroy($id) {
            $cursoEncontrado = Curso::find($id);
            if ( $cursoEncontrado ) {
                if ( $cursoEncontrado->delete() ) {
                    return response('OK',200);
                } else { return response('',400); }
            } else { return response('',404); }
        }
}
