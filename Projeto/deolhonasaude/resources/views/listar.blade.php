@extends('logo')

@section('conteudo')

<div class="back">
    <a href="{{route('pastas.index')}}">
        <img src="{{ asset('images/arrow.svg') }}" alt="Voltar">
    </a>
</div>

<div class="display-exame">
    @foreach($dados as $d)
    @if($d->pasta->nome == $tipo)
    <div class="card-exame">
        <h5>{{$d->pasta->nome}}</h5>
        <h6 class="card-descricao">{{$d->data}}</h6>
        <p class="card-descricao">{{$d->resultado}}</p>
        <p class="card-descricao">{{$d->observacoes}}</p>
        <div class="card-btn">
            <a href="{{route('exames.destroy', $d->id)}}" class="card-link" onclick="event.preventDefault();
            document.getElementById('delete-form').submit();">Remover</a>

            <form id="delete-form" name="frmDelete" action="{{route('exames.destroy', $d->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão do Exame?');">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection