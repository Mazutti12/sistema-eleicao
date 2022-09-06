@extends('base.index')

@section('container')
    <div>
        <form class="mg-form" action="/votos/store" method="POST">
            @csrf

            <label class="form-label" for="horario_voto">Horário do Voto:</label>
            <input class="form-control" type="datetime-local" name="horario_voto" id="horario_voto" readonly>

            <label class="form-label" for="zona">Zona:</label>
            <input class="form-control" type="number" name="zona" id="zona">

            <label class="form-label" for="secao">Seção:</label>
            <input class="form-control" type="number" name="secao" id="secao">

            <label class="form-label" for="candidato_id">Candidato:</label>
            <input class="form-control" type="number" name="candidato_id" id="candidato_id">

            <button class="btn btn-outline-success btn-sm full form-control mg-top" type="submit">Salvar</button>
            <a class="btn btn-outline-danger btn-sm full mg-top form-control" href="/votos/index">Voltar</a>
        </form>
    </div>
@endsection
