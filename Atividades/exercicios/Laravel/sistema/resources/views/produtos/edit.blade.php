@extends('principal')

@section('conteudo')

<div class="cadastro">
    <form action="{{ route('produtos.update', $produto->id)}}" method="post">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$produto->nome}}">
        </div>

        <div class="form-group">
            <label for="sigla">Unidade de Medidas</label>
            <input type="text" class="form-control" name="um" id="um" value="{{$produto->um}}">
        </div>

        <div class="text-right">
            <input type="submit" value="Atualizar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>
</div>

@endsection