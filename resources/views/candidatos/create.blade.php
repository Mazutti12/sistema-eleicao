@extends('base.index-resto')

@section('container')
    <div class="container">
        <form class="mg-top" action='/cursos/store' method='post'>
            <input type='hidden' name='_token' value='{{ csrf_token() }}' />

            @include('components.field', [
                'idinp' => '',
                'id' => '',
                'style' => '',
                'type' => 'text',
                'name' => 'nome',
                'label' => 'Nome do Curso',
                'value' => '',
            ])
            @include('components.field', [
                'idinp' => '',
                'id' => '',
                'style' => '',
                'type' => 'text',
                'name' => 'nome_reduzido',
                'label' => 'Nome reduzido',
                'value' => '',
            ])

            @include('components.button', [
                'color' => 'btn btn-outline-success btn-sm form-control',
                'label' => 'Salvar',
                'type' => 'submit',
            ])
            <a class="btn btn-outline-danger btn-sm full" href="/cursos">Voltar</a>
        </form>
    </div>
@endsection
