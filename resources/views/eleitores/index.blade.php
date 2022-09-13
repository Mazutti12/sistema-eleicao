@extends('base.index')

@section('container')
    <div class="container-layout container">
        <a class="btn btn-outline-secondary btn-sm full mg-top form-control" href="/eleitores/create">Novo Registro</a>

        <table class="table table-striped full">
            <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Título</th>
                    <th class="text-center">Zona</th>
                    <th class="text-center">Seção</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sequencia = 1;
                @endphp

                @foreach ($eleitores as $eleitor)
                    <tr>
                        <td class="text-center"> {{ $sequencia++ }}</td>
                        <td class="text-center"> {{ $eleitor->nome }}</td>
                        <td class="text-center"> {{ $eleitor->titulo }}</td>
                        <td class="text-center"> {{ $eleitor->zona }}</td>
                        <td class="text-center"> {{ $eleitor->secao }}</td>
                        <td class="text-center">
                            <a class="bi bi-pencil-square text-black" href="/eleitores/show/{{ $eleitor->id }}">Editar</a>
                            <a class="bi bi-trash3 text-black" href="/eleitores/destroy/{{ $eleitor->id }}">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
