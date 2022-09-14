@extends('base.index')

@section('container')   
    <div>
        <form class="mg-form" action="/periodos/update" method="POST">
            <input type='hidden' name='_token' value='{{ csrf_token() }}' />

            <label class="form-label" for="dt_inicio">Data Início:</label>
            <input class="form-control" type="datetime-local" name="dt_inicio" id="dt_inicio"
                value="{{ $periodo->dt_inicio }}">

            <label class="form-label" for="dt_fim">Data Fim:</label>
            <input class="form-control" type="datetime-local" name="dt_fim" id="dt_fim" value="{{ $periodo->dt_fim }}">

            <button class="btn btn-outline-success btn-sm form-control mg-top" type="submit">Alterar</button>
            <a class="btn btn-outline-danger btn-sm form-control" href="/periodos">Voltar</a>
        </form>
    </div>
@endsection
