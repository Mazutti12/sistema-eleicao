@extends('base.index-resto')

@section('container')
    <form action='/cursos/update' method='post'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        <input type="hidden" value="{{ $curso->id }}" name="id" />

        @include('components.field', [
            'idinp' => '',
            'id' => '',
            'style' => '',
            'type' => 'text',
            'name' => 'nome',
            'label' => 'Nome',
            'value' => $curso->nome,
        ])
        @include('components.field', [
            'idinp' => '',
            'id' => '',
            'style' => '',
            'type' => 'text',
            'name' => 'nome_reduzido',
            'label' => 'Nome reduzido',
            'value' => $curso->nome_reduzido,
        ])


        @include('components.button', [
            'type' => 'submit',
            'color' => 'btn btn-outline-success btn-sm form-control mg-top',
            'label' => 'Alterar',
        ])
        <a class="btn btn-outline-danger btn-sm form-control full" href="/cursos">Voltar</a>

    </form>
@endsection
