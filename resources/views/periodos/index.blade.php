@extends('base.index')

@section('container')
    <div class="container-layout container">
        <a class="btn btn-outline-secondary btn-sm full mg-top form-control" href="/periodos/create">Novo Registro</a>

        <table class="table table-striped full">
            <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-center">Data de Início</th>
                    <th class="text-center">Data Fim</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sequencia = 1;
                @endphp

                @foreach ($periodos as $periodo)
                    <tr>
                        <td class="text-center"> {{ $sequencia++ }}</td>
                        <td class="text-center"> {{ $periodo->dt_inicio }}</td>
                        <td class="text-center"> {{ $periodo->dt_fim }}</td>
                        <td class="text-center">
                            <a class="bi bi-pencil-square text-black" href="/periodos/show/{{ $periodo->id }}">Editar</a>
                            <a class="bi bi-trash3 text-black" href="/periodos/destroy/{{ $periodo->id }}">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
