<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção no Banco de Dados</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <form name="frmDados" action="/PDO/dados/produtosControllerInsert.php" method="post">
        <div  class="form-group" style="display:grid; margin-top: 20px; justify-content: center; align-items:center ;">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" value="" name="nome">

            <label for="um">Unidade de Medida</label>
            <input type="text" class="form-control" value="" name="um">

            <button type="submit" class="btn btn-dark"
                style="margin-top: 20px;">Submit</button>
            <a href="/PDO/dados/index.php"  style="margin-top: 20px;" class="btn btn-dark" role="button" aria-pressed="true">Voltar</a>

        </div>
    </form>

</body>

</html>