@extends('logo')

@section('conteudo')

<div class="back">
    <a href="{{route('exames.create')}}">
        <img src="{{ asset('images/arrow.svg') }}" alt="Voltar">
    </a>
</div>

<div class="posi">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('pastas.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">Nome do Exame</label>

                                <div class="col-md-6">
                                    <input id="nome" type="nome" class="form-control" name="nome" required autofocus>
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
    </div>

    @endsection