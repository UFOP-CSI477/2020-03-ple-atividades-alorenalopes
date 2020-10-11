@extends('logo')

@section('conteudo')
<div class="nameHome">
    <h1>Seja bem vindo, <span>{{ Auth::user()->name }}</span></h1>
</div>

<div class="principalHome">
    <div class="imgHome">
        <img src="{{ asset('images/homelogado.svg') }}" alt="">
    </div>
    <div class="btnHome">
        <a class="btninHome" href="{{route('pastas.index')}}">Listar exames</a>
        <a class="btninHome" href="{{route('exames.create')}}">Adicionar exames</a>
        <a class="btninHome" href="{{Auth::logout()}}">Logout</a>
    </div>
</div>

@endsection