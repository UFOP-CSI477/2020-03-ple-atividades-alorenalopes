<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De olho na saúde</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>

    <div class="principal">
        <h2>De
            <a href="{{route('principal')}}">
                <img src="{{ asset('images/olho.svg') }}" alt="">
            </a>
            na saúde
        </h2>
    </div>


    <div class="principal-conteudo">
        <div class="principal-img">
            <img src="{{ asset('images/home.svg') }}" alt="">
            <h1>CUIDE DE VOCÊ</h1>
            <p>Cuide da sua saúde</p>
        </div>
        <div class="principal-img">
            <div class="textfold">
                <h3>Temos como principal objetivo te aproximar do seu histórico médico,
                    armazenando todos os resultados dos seus exames e ficando sempre
                    DE OLHO NA SUA SAÚDE.</h3>
            </div>

            <div class="btn">
                @guest
                <a href="{{route('login')}}">Login</a>
                <a href="{{route('register')}}">Registrar</a>
                @endguest
                @if (Auth::check())
                <a href="{{route('home')}}">Entrar</a>
                @endif
            </div>
        </div>
    </div>
    @yield('conteudo')

    <div class="footer">
        <p>Ícones feitos por <a href="https://www.flaticon.com/br/autores/catkuro" title="catkuro">catkuro</a> from <a href="https://www.flaticon.com/br/" title="Flaticon"> www.flaticon.com</a></p>
    </div>
</body>

</html>