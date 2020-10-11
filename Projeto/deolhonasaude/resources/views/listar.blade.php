@extends('logo')

@section('conteudo')

@foreach($dados as $d)
@if($d->pasta->nome == $tipo)
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$d->pasta->nome}}</h5>
        <h6 class="card-title">{{$d->data}}</h6>
        <h7 class="card-title">{{$d->resultado}}</h7>
        <h7 class="card-title">{{$d->observacoes}}</h7>
    </div>
    <form action="{{route('deletar',$d->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
</div>
@endif
@endforeach



@endsection