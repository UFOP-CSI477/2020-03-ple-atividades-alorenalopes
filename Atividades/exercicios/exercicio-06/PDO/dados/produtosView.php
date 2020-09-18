<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção no Banco de Dados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/PDO/dados/produtos.css">
</head>

<body>



    <div id="produtos_css">
        <a  style="font-weight:bold;" href="/PDO/dados/produtosViewInsert.php" class="btn btn-dark" role="button" aria-pressed="true">Inserir</a>
        <table class="table">

            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Unidade de Medida</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($p = $produtos->fetch()) {
                    echo "<tr>" . "<th>" . $p["id"] . "</th>" . "<th>" . $p["nome"] . "</th>" . "<th>" . $p["um"] . "</th>" . "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>