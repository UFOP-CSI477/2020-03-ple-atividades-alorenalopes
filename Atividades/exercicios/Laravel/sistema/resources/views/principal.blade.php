<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Vendas</title>
    <link rel="stylesheet" href="C:\Users\bruno\Documents\GitHub\2020-03-ple-atividades-alorenalopes\Atividades\exercicios\Laravel\sistema\resources\css\principal.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <div id="page_home">
        <header>
            <nav>
                <ul>
                    <li><a href="{{route('principal')}}">Home</a></li>
                    <li><a href="{{route('estados.index')}}">Estados</a></li>
                    <li><a href="/src/views/relatorio.html">Cidades</a></li>
                    <li><a href="{{route('produtos.index')}}">Vendas</a></li>
                </ul>
            </nav>
        </header>

        <h1>Sistema de Vendas</h1>


    </div>

    @yield('conteudo')

</body>

</html>