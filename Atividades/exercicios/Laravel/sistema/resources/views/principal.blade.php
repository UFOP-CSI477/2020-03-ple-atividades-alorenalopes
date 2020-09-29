<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Vendas</title>
    <link rel="stylesheet" href="/public/styles/principal.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
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