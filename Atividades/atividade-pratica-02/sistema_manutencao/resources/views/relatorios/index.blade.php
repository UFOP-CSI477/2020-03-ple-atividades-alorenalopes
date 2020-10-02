@extends('principal')

@section('conteudo')


@foreach($dados as $d)
<nav class="navbar navbar-dark bg-dark corletra">
<ul class="navbar-nav">
    <li class="nav-item">
        {{ $d->nome }}
    </li>
</ul>
</nav>
@foreach($registros as $r)
@if($d->nome == $r->nome)
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $r->descricao }}</h5>
        <p class="card-text">{{ $r->datalimite }}</p>
    </div>
</div>
@endif
@endforeach
@endforeach


@endsection