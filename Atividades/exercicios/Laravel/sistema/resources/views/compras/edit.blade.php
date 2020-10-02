@extends('principal')

@section('conteudo')

<div class="cadastro">
    <form action="{{ route('compras.update', $compras->id)}}" method="post">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="produtos_id">Produtos</label>
            <select name="produtos_id" id="produtos_id" class="form-control">
                @foreach($produtos as $e)
                <option value="{{$e->id}}" @if($compras->produtos_id == $e->id)
                    selected
                    @endif
                    >{{$e->nome}}</option>
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