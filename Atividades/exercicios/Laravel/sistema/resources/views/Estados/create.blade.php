@extends('principal')

@section('conteudo')

<form action="{{route('estados.store')}}" method="post">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="form-group">
        <label for="nome">Sigla</label>
        <input type="text" class="form-control" name="sigla" id="sigla">
    </div>
    <div class="text-right">
        <input type="submit" value="cadastrar" class="btn btn-primary">
        <input type="reset" value="limpar" class="btn btn-danger">
    </div>
</form>

@endsection