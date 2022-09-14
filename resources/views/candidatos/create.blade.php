@extends('base.index')

@section('container')
    <div>
        <form class="mg-form" action="/candidatos/store" method="POST">
            @csrf


            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">

            <label class="form-label" for="partido">Partido:</label>
            <input class="form-control" type="text" name="partido" id="partido">

            <label class="form-label" for="sigla_partido">Sigla do Partido:</label>
            <input class="form-control" type="text" name="sigla_partido" id="sigla_partido" maxlength="5">

            <label class="form-label" for="numero">Número da Candidatura:</label>
            <input class="form-control" type="number" name="numero" id="numero" placeholder="1111">

            <label class="form-label" for="cargo">Cargo:</label>
            <select name="cargo" class="form-select" id="cargo">
                <option value="0" selected></option>
                <option value="1">Presidente</option>
                <option value="2">Senador</option>
                <option value="3">Deputado Federal</option>
                <option value="4">Deputado Estadual</option>

            </select>

            <label class="form-label" for="periodo_id">Períodos</label>
            <select name="periodo_id" class="form-select" id="periodo_id">
            </select>

            <button class="btn btn-outline-success btn-sm full form-control mg-top" type="submit">Salvar</button>
            <a class="btn btn-outline-danger btn-sm full mg-top form-control" href="/candidatos">Voltar</a>

        </form>
    </div>
@endsection
