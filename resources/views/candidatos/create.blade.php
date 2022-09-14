@extends('base.index')

@section('container')
    <div>
        <form class="mg-form" action="/candidatos/store" method="POST">
            @csrf


            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">

            <label class="form-label" for="partido">Partido:</label>
            <select class="form-control" name="partido" id="partido">
                <option value="" selected>Partidos</option>
                <option value="teste">saf</option>
            </select>
            <label class="form-label" for="sigla_partido">Sigla do Partido:</label>
            <input class="form-control" type="text" name="sigla_partido" id="sigla_partido" maxlength="5">

            <label class="form-label" for="numero">Número da Candidatura:</label>
            <input class="form-control" type="number" name="numero" id="numero" placeholder= "1111" >

            <label class="form-label" for="cargo">Cargo:</label>
            <input class="form-control" type="text" name="cargo" id="cargo" placeholder= "Deputado Federal" >

            <button class="btn btn-outline-success btn-sm full form-control mg-top" type="submit">Salvar</button>
            <a class="btn btn-outline-danger btn-sm full mg-top form-control" href="/candidatos">Voltar</a>

        </form>
    </div>
@endsection
