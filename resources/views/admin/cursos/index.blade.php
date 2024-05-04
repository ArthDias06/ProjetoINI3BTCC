@extends('layout.site')
@section('titulo','Cursos')
@section('conteudo')
<div class='container'>
<h3 class='center'>Lista de Cursos</h3>
<div class='row'>
<table>
<thead>
<tr> <!-- CABECALHO -->
<td>Id</td><td>Titulo</td><td>Descrição</td>
<td>Publicado</td><td>Valor</td>
<td>Imagem</td>
<td>Ação</td>
</tr>
</thead>
<tbody>
@foreach($rows as $row) <!-- LOOP PRA LER A TABELA -->
<tr>
<td>{{ $row->id }}</td><td>{{ $row->titulo }}</td>
<td>{{ $row->descricao }}</td>
<td>{{ $row->publicado }}</td><td>{{ $row->valor }}</td>
<td><img src="{{ asset($row->imagem) }}"
alt="{{ $row->titulo }}"></td>
<td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
<a class='btn deep-orange'
href="{{ route('admin.cursos.editar',$row->id) }}">Alterar</a>
<a class='btn rede'
href="{{ route('admin.cursos.excluir',$row->id) }}">Excluir</a>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<div class='row'> <!-- BOTAO ADICIONAR -->
<a class='btn blue' href="{{ route('admin.cursos.adicionar')}}">Adicionar</a>
</div>
</div>
@endsection
