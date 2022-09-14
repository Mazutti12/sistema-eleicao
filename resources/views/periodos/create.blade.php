@extends('base.index')

@section('container')
    <div>
        <form class="mg-form" action="/periodos/store" method="POST">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <label class="form-label" for="dt_inicio">Data Início:</label>
            <input class="form-control" type="datetime-local" name="dt_inicio" id="dt_inicio">

            <label class="form-label" for="dt_fim">Data Fim:</label>
            <input class="form-control" type="datetime-local" name="dt_fim" id="dt_fim">

            <button class="btn btn-outline-success btn-sm full form-control mg-top" type="submit">Salvar</button>
            <a class="btn btn-outline-danger btn-sm full mg-top form-control" href="/periodos/">Voltar</a>
        </form>
    </div>
@endsection
