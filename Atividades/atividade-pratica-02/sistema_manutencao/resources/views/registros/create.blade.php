@extends('principal')

@section('conteudo')

<div class="cadastro">
    <form action="{{route('registros.store')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="user_id">Usuário: {{Auth::user()->name}}</label>
            <input name="user_id" id="user_id" value="{{Auth::user()->id}}" class="form-control" hidden></input>
        </div>

        <div class="form-group">
            <label for="equipamentos_id">Equipamento</label>
            <select name="equipamentos_id" id="equipamentos_id" class="form-control">
                @foreach($equipamentos as $e)
                <option value="{{$e->id}}">{{$e->nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao"></textarea>
        </div>

        <div class="form-group">
            <label for="datalimite">Data</label>
            <input type="date" class="form-control" name="datalimite" id="datalimite">
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
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>
</div>

@endsection