@extends('logo')

@section('conteudo')

<div class="back">
    <a href="{{route('home')}}">
    <img src="{{ asset('images/arrow.svg') }}" alt="Voltar">
    </a>
</div>

<div class="container posiExame corr">
    <div class="row justify-content-center corr">
        <div class="col-md-8 corr">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('exames.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">Usuário</label>

                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control" name="user_id" value="{{ Auth::user()->id }}" hidden></input>
                                <input class="form-control" value="{{ Auth::user()->name }}" disabled autofocus></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pasta_id" class="col-md-4 col-form-label text-md-right">Tipo de Exame</label>

                            <div class="col-md-6">
                                <select name="pasta_id" id="pasta_id" class="form-control">
                                    @foreach($dados as $d)
                                    <option value="{{$d->id}}">{{$d->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="addExame">
                                <a href="{{route('pastas.create')}}">Adicionar novo tipo de exame</a>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="data" class="col-md-4 col-form-label text-md-right">Data do Exame</label>

                            <div class="col-md-6">
                                <input id="data" type="date" class="form-control" name="data" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="resultado" class="col-md-4 col-form-label text-md-right">Resultado</label>

                            <div class="col-md-6">
                                <textarea id="resultado" type="text" class="form-control" name="resultado" required autofocus></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observacoes" class="col-md-4 col-form-label text-md-right">Observações</label>

                            <div class="col-md-6">
                                <textarea id="observacoes" type="text" class="form-control" name="observacoes" required autofocus></textarea>
                            </div>
                        </div>
                        <div class="btnExame">
                            <button type="submit" class="btn-autenticacao">
                                Cadastrar
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection