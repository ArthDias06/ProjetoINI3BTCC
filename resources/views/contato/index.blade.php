@extends ('layout.site')
@section('titulo','Contatos')
@section('conteudo')
    <h1>Oi, aqui é tudo html</h1>
    @foreach($contatos as $c)
        <p>{{ $c['tema'] }}</p>
        <p>{{ $c['titulo'] }}</p>
        <hr>
    @endforeach
@endsection
