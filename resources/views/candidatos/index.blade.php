@extends('base.index')

@section('container')
    <div class="container-layout container">
        <a class="btn btn-outline-secondary btn-sm full mg-top form-control" href="/candidatos/create">Novo Registro</a>

        <table class="table table-striped full">
            <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Sigla do Partido</th>
                    <th class="text-center">Número</th>
                    <th class="text-center">Cargo</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sequencia = 1;
                @endphp

                @foreach ($candidatos as $candidato)
                    <tr>
                        <td class="text-center"> {{ $sequencia++ }}</td>
                        <td class="text-center"> {{ $candidato->nome }}</td>
                        <td class="text-center"> {{ $candidato->sigla_partido }}</td>
                        <td class="text-center"> {{ $candidato->numero }}</td>
                        <td class="text-center"> {{ $candidato->cargo }}</td>
                        <td class="text-center">
                            <a class="bi bi-pencil-square text-black" href="/candidatos/show/{{ $candidato->id }}">Editar</a>
                            <a class="bi bi-trash3 text-black" href="/candidatos/destroy/{{ $candidato->id }}">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
