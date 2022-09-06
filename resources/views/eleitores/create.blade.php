@extends('base.index')

@section('container')
    <div>
        <form class="mg-form" action="/eleitores/store" method="POST">
            @csrf

            
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">

            <label class="form-label" for="titulo">Título:</label>
            <input class="form-control" type="number" name="titulo" id="titulo">

            <label class="form-label" for="secao">Seção:</label>
            <input class="form-control" type="number" name="secao" id="secao">

            <label class="form-label" for="zona">Zona:</label>
            <input class="form-control" type="number" name="zona" id="zona">

            <button class="btn btn-outline-success btn-sm full form-control mg-top" type="submit">Salvar</button>
            <a class="btn btn-outline-danger btn-sm full mg-top form-control" href="/eleitores">Voltar</a>
        </form>
    </div>
@endsection
