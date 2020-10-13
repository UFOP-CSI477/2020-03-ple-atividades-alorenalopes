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
            <div>
                <a class="card-btn" href="{{route('pastas.destroy', $d->id)}}" onclick="event.preventDefault();
            document.getElementById('delete-form').submit();">Remover</a>

                <form id="delete-form" name="frmDelete" action="{{route('pastas.destroy', $d->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão dos Exames?');">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>



@endsection