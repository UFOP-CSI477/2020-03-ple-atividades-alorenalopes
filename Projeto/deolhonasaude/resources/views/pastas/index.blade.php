@extends('logo')

@section('conteudo')

@foreach($dados as $d)
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$d->nome}}</h5>
        <a href="{{route('exames.index')}}" class="card-link">Exibir todos</a>
        <a href="{{route('exames.create')}}" class="card-link">Adicionar mais resultados</a>
    </div>
</div>
@endforeach



@endsection