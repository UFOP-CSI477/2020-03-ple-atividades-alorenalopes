@extends('principal')

@section('conteudo')

<div class="cadastro">
    <form action="{{route('produtos.store')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="form-group">
            <label for="nome">Unidade de Medidas</label>
            <input type="text" class="form-control" name="um" id="um">
        </div>
        
        <div class="text-right">
            <input type="submit" value="cadastrar" class="btn btn-primary">
            <input type="reset" value="limpar" class="btn btn-danger">
        </div>
    </form>
</div>

@endsection