@extends('logo')

@section('conteudo')

@foreach($dados as $d)
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$d->pasta->nome}}</h5>
        <h6 class="card-title">{{$d->data}}</h6>
        <h7 class="card-title">{{$d->resultado}}</h7>
        <h7 class="card-title">{{$d->observacoes}}</h7>
        <a href="{{route('pastas.destroy', $d->id)}}">Delete</a>
    </div>
</div>
@endforeach



@endsection