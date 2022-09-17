@extends('base.index')

@section('container')
    <div>
        <form class="mg-form" action="/candidatos/store" method="POST">
            @csrf


            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">

            <label class="form-label" for="partido">Partido:</label>
            <select name="partido" class="form-select" id="partido">
                <option value="0" selected></option>
                <option value="1">MOVIMENTO DEMOCRÁTICO BRASILEIRO</option>
                <option value="2">PARTIDO TRABALHISTA BRASILEIRO</option>
                <option value="3">PARTIDO DEMOCRÁTICO TRABALHISTA</option>
                <option value="4">PARTIDO DOS TRABALHADORES</option>
                <option value="5">PARTIDO COMUNISTA DO BRASIL</option>
                <option value="6">PARTIDO SOCIALISTA BRASILEIRO</option>
                <option value="7"> PARTIDO DA SOCIAL DEMOCRACIA BRASILEIRA</option>
                <option value="8"> AGIR</option>
                <option value="9">PARTIDO SOCIAL CRISTÃO</option>
                <option value="10">PARTIDO DA MOBILIZAÇÃO NACIONAL</option>
                <option value="11">CIDADANIA</option>
                <option value="12">PARTIDO VERDE</option>
                <option value="13">AVANTE </option>
                <option value="14">PROGRESSISTAS</option>
                <option value="15">PARTIDO SOCIALISTA DOS TRABALHADORES UNIFICADO</option>
                <option value="16">PARTIDO COMUNISTA BRASILEIRO</option>
                <option value="17"> PARTIDO RENOVADOR TRABALHISTA BRASILEIRO</option>
                <option value="18">DEMOCRACIA CRISTÃ</option>
                <option value="19"> PARTIDO DA CAUSA OPERÁRIA </option>
                <option value="20">PODEMOS</option>
                <option value="21">REPUBLICANOS</option>
                <option value="22">PARTIDO SOCIALISMO E LIBERDADE</option>
                <option value="23">PARTIDO LIBERAL </option>
                <option value="24">PARTIDO SOCIAL DEMOCRÁTICO</option>
                <option value="25">PATRIOTA</option>
                <option value="26">PARTIDO REPUBLICANO DA ORDEM SOCIAL</option>
                <option value="27">SOLIDARIEDADE </option>
                <option value="28">PARTIDO NOVO</option>
                <option value="29">REDE SUSTENTABILIDADE</option>
                <option value="30">PARTIDO DA MULHER BRASILEIRA</option>
                <option value="31">UNIDADE POPULAR </option>
                <option value="32">UNIÃO BRASIL</option>


            </select>
            <label class="form-label" for="sigla_partido">Sigla do Partido:</label>
            <input class="form-control" type="text" name="sigla_partido" id="sigla_partido" maxlength="5">

            <label class="form-label" for="numero">Número da Candidatura:</label>
            <input class="form-control" type="number" name="numero" id="numero" placeholder="1111">

            <label class="form-label" for="cargo">Cargo:</label>
            <select name="cargo" class="form-select" id="cargo">
                <option value="0" selected></option>
                <option value="1">Presidente</option>
                <option value="2">Senador</option>
                <option value="3">Deputado Federal</option>
                <option value="4">Deputado Estadual</option>

            </select>

            <label class="form-label" for="periodo_id">Períodos</label>
            <select name="periodo_id" class="form-select" id="periodo_id">
            </select>

            <button class="btn btn-outline-success btn-sm full form-control mg-top" type="submit">Salvar</button>
            <a class="btn btn-outline-danger btn-sm full mg-top form-control" href="/candidatos">Voltar</a>

        </form>
    </div>
@endsection
