@extends('principal')

@section('conteudo')

<div class="cadastro">
    <form action="{{route('compras.store')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="produtos_id">Produtos</label>
            <select name="produtos_id" id="produtos_id" class="form-control">
                @foreach($produtos as $e)
                    <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>
</div>

@endsection