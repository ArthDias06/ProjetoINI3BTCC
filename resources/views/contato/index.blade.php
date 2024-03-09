<h1>Oi, aqui é tudo html</h1>
@foreach($contatos as $c)
    <p>{{ $c['nome'] }}</p>
    <p>{{ $c['cel'] }}</p>
    <hr>
@endforeach
@for($i = 0; $i < 10; $i++)
    <p>{{ "Oi ".$i+1 }}</p>
@endfor