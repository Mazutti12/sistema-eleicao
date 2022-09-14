@extends('base.index')

@section('container')
    <div class="container-layout container">
        <a class="btn btn-outline-secondary btn-sm full mg-top form-control" href="/votos/create">Novo Registro</a>

        <table class="table table-striped full">
            <thead>
                <tr>
                    <th class="text-center">Código</th>
                    <th class="text-center">Nome</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sequencia = 1;
                @endphp

                @foreach ($votos as $v)
                    <tr>
                        <td class="text-center"> {{ $sequencia++ }}</td>
                        <td class="text-center"> {{ $v->nome }}</td>
                        <td class="text-center"> {{ $v->zona }}</td>
                        <td class="text-center"> {{ $v->secao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
