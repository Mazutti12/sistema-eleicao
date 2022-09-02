@extends('base.index')

@section('container')
    <div class="container-layout container">
        <a class="btn btn-outline-secondary btn-sm full mg-top" href="/eleitores/create">Novo Registro</a>

        <table class="table table-striped full">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sequencia = 1;
                @endphp

                @foreach ($eleitores as $eleitor)
                    <tr>
                        <td> {{ $sequencia+ }}</td>
                        <td> {{ $eleitor->nome }}</td>
                        <td>
                            <a class="bi bi-pencil-square text-black" href="/eleitores/show/{{ $eleitor->id }}">Editar</a>
                            <a class="bi bi-trash3 text-black" href="/eleitores/destroy/{{ $eleitor->id }}">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
