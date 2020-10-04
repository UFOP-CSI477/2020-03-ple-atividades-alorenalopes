@extends('principal')

@section('conteudo')

<div class="cadastro">
    <form action="{{route('agendamentos.update', $dados->id)}}" method="post">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" class="form-control" name="data" id="data">
        </div>

        <div class="form-group">
            <label for="coleta_id">Local da Coleta</label>
            <select name="coleta_id" id="coleta_id" class="form-control">
                @foreach($coletas as $c)
                <option value="{{$c->id}}">{{$c->nome}} - {{$c->cidade}}</option>
                @endforeach
            </select>
        </div>

        <div class="text-right">
            <input type="submit" value="Atualizar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>
</div>

@endsection