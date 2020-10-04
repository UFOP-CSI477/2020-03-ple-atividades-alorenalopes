@extends('principal')

@section('conteudo')

<div class="cadastro">
    <form action="{{route('pessoas.store')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="form-group">
            <label for="tipo">Tipo Sanguíneo</label>
            <input type="text" class="form-control" name="tipo" id="tipo">
        </div>

        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>
</div>

@endsection