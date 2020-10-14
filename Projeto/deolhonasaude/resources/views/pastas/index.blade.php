@extends('logo')

@section('conteudo')
<div class="back">
    <a href="{{route('home')}}">
        <img src="{{ asset('images/arrow.svg') }}" alt="Voltar">
    </a>
</div>

<div class="display">
    @foreach($dados as $d)
    <div class="card-pasta">
        <h5>{{$d->nome}}</h5>
        <div class="card-btn">
            <a href="{{route('listar', $d->nome)}}" class="card-link">Exibir</a>
            <a href="{{route('exames.create')}}" class="card-link">Adicionar</a>
            @csrf
            @method('DELETE')
            <a class="card-link" href="{{route('pastas.destroy', $d->id)}}">Excluir</a>
        </div>
    </div>
    @endforeach
</div>



@endsection