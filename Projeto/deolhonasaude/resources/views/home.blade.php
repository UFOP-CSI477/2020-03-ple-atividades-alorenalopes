@extends('logo')

@section('conteudo')
<div class="home-perfil">
    <h1>{{ Auth::user()->name }}</h1>
</div>

<div class="principal-conteudo">
    <div class="principal-img">
        <img src="assets/img/homelogado.svg" alt="">
    </div>
    <div class="principal-img">
        <a href="{{route('exames.create')}}">Adicionar exame</a>
        <a href="{{route('pastas.index')}}">Exames</a>
    </div>
</div>

@endsection