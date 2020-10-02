@extends('principal')

@section('conteudo')

<div class="cadastro">
    <form action="{{ route('equipamentos.update', $dados->id)}}" method="post">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$dados->nome}}">
        </div>

        <div class="text-right">
            <input type="submit" value="Atualizar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>
</div>

@endsection