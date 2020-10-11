@extends('logo')

@section('conteudo')
<div class="back">
    <img src="{{ asset('images/arrow.svg') }}" alt="Voltar" srcset="">
</div>
<div class="display">
    @foreach($dados as $d)
    <div class="cardE">
        <h5>{{$d->nome}}</h5>
        <div class="comp">
            <a href="{{route('exames.index')}}" class="card-link">Exibir</a>
            <a href="{{route('exames.create')}}" class="card-link">Adicionar</a>
        </div>
    </div>
    @endforeach
</div>



@endsection