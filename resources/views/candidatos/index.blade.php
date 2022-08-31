@extends('base.index')

@extends('base.navbar')

@section('container')
    <div class="container">
        <a class="btn btn-outline-secondary btn-sm full mg-top" href="/candidatos/create">Adicionar Candidato</a>
        <div>
            <table class="table table-striped full">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($candidatos as $candidato)
                        <tr>
                            <td>{{ $candidato->nome }}</td>
                            <td>{{ $candidato->partido }}</td>
                            <td>{{ $candidato->numero }}</td>
                            <td>{{ $candidato->cargo }}</td>
                            <td>{{ $candidato->periodo }}</td>
                            <td>
                                <a class="bi bi-pencil-square text-black" href="/candidatos/{{ $candidato->id }}/edit">Editar</a>
                                <!-- <a class="btn btn-info" href="/candidatos/{{ $candidato->id }}/show">Ver</a> -->
                                <a class="bi bi-trash3 text-black" href="/candidatos/{{ $candidato->id }}/destroy">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
