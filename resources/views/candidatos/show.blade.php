@extends('base.index')

@section('container')
    <div>
        <form class="mg-form" action="/candidatos/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$candidato->id}}">

            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" value="{{$candidato->nome}}">

            <label class="form-label" for="partido">Partido:</label>
            <input class="form-control" type="text" name="partido" id="partido" value="{{$candidato->partido}}">

            <label class="form-label" for="sigla_partido">Sigla do Partido:</label>
            <input class="form-control" type="text" name="sigla_partido" id="sigla_partido" maxlength="5" value="{{$candidato->sigla_partido}}">

            <label class="form-label" for="numero">Número da Candidatura:</label>
            <input class="form-control" type="number" name="numero" id="numero" placeholder= "1111" value="{{$candidato->numero}}">

            <label class="form-label" for="cargo">Cargo:</label>
            <input class="form-control" type="text" name="cargo" id="cargo" placeholder= "Deputado Federal" value="{{$candidato->cargo}}">

            <button class="btn btn-outline-success btn-sm full form-control mg-top" type="submit">Salvar</button>
            <a class="btn btn-outline-danger btn-sm full mg-top form-control" href="/candidatos">Voltar</a>
        </form>
    </div>
@endsection
