<div class="input-field">
    <input type="text" name="titulo" value="{{ isset($linha->titulo) ? $linha->titulo : ''}}">
    <label>Título</label>
</div>
<div class="input-field">
    <input type="text" name="descricao" value="{{ isset($linha->descricao) ? $linha->descricao : '' }}">
    <label>Descrição</label>
</div>
<div class="input-field">
    <input type="text" name="valor" value="{{isset($linha->valor) ? $linha->valor : ''}}">
    <label>Valor</label>
</div>
<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="arquivo">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($linha->imagem))
    <div class="input-field">
    <img width="150" src="{{asset($linha->imagem)}}" />
</div>
@endif
<div class="input-field">
    <p>
    <label>
    <input type="checkbox" name="publicado" value="checked" {{ isset($linha->publicado) && $linha->publicado == 'sim' ? 'checked' : '' }}>
    <span>Publicar?</span>
    </label>
    </p>
    <br><br>
</div>