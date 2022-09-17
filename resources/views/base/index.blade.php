<!DOCTYPE html>

@include('base.header', ['title' => 'ELEIÇÕES 2022'])

<body
        <ul>
            <li><a href="..\">Home</a></li>
            <li><a href="..\periodos">Períodos</a></li>
            <li><a href="..\eleitores">Eleitores</a></li>
            <li><a href="..\candidatos">Candidatos</a></li>
            <li><a href="..\votos">Votação</a></li>
          </ul>
        @yield('container')


    @include('base.footer')
