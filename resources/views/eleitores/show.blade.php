@extends('base.index')

@section('container')
    <div>
        <form class="mg-form" action="/eleitores/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $eleitor->id }}">

            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" value="{{ $eleitor->nome }}">

            <label class="form-label" for="titulo">Título:</label>
            <input class="form-control" type="number" name="titulo" id="titulo" value="{{ $eleitor->titulo }}">

            <label class="form-label" for="secao">Seção:</label>
            <input class="form-control" type="number" name="secao" id="secao" value="{{ $eleitor->secao }}">

            <label class="form-label" for="zona">Zona:</label>
            <input class="form-control" type="number" name="zona" id="zona" value="{{ $eleitor->zona }}">

            <button class="btn btn-outline-success btn-sm form-control mg-top" type="submit">Alterar</button>
            <a class="btn btn-outline-danger btn-sm form-control" href="/eleitores">Voltar</a>
        </form>
    </div>
@endsection
