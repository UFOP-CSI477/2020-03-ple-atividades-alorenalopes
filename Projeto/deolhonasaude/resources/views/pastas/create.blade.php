@extends('logo')

@section('conteudo')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-autenticacao">

                <div class="card-body">
                    <form method="POST" action="{{ route('pastas.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">Nome do Exame</label>

                            <div class="col-md-6">
                                <input id="nome" type="nome" class="form-control" name="nome" required autofocus>
                            </div>
                        </div>

                        <button type="submit" class="btn button-autenticacao">
                            Cadastrar
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection