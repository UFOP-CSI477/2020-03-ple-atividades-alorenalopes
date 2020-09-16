<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="/PHP/soma.js"></script>
</head>

<body>

    <form action="/PHP/validar.php" name="frmDados" method="post"  onsubmit="return soma()">
        <div class="form-group" style="display:grid; margin-top: 20px; justify-content: center; align-items:center ;">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" style="width: 300px;">

            <label for="idade">Idade</label>
            <input type="number" class="form-control" name="idade" id="idade">

            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Informe o cpf com os pontos e hífen">

            <label for="item1">Item 1</label>
            <input type="number" class="form-control" id="item1" name="item1" placeholder="Informe a quantidade">

            <label for="item2">Item 2</label>
            <input type="number" class="form-control" id="item2" name="item2" placeholder="Informe a quantidade">

            <button type="submit" class="btn btn-dark" value="submit" name="btnSubmit" style="margin-top: 20px;">Submit</button>
        </div>
    </form>

</body>

</html>