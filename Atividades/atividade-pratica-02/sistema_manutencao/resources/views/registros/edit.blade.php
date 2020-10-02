@extends('principal')

@section('conteudo')

<div class="cadastro">
    <form action="{{route('registros.update', $dados->id)}}" method="post">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" value="{{$dados->descricao}}"></textarea>
        </div>

        <div class="form-group">
            <label for="datalimite">Data</label>
            <input type="date" class="form-control" value="{{$dados->datalimite}}" name="datalimite" id="datalimite">
        </div>


        <div class="form-group">
            <label for="tipo">Manutenção</label>
            <select name="tipo" id="tipo" class="form-control">
                <option value=1>Preventiva</option>
                <option value=2>Corretiva</option>
                <option value=3>Urgente</option>
            </select>
        </div>
        <div class="text-right">
            <input type="submit" value="Atualizar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>
</div>

@endsection