<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao JS</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="soma.js"></script>
</head>

<body>

    <div style="display:flex; margin-top: 50px; justify-content: center; align-items:center; margin-bottom: 25px;">
        <ul class="list-group" id="dados" style="width: 300px;">
            <?php
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $cpf = $_POST["cpf"];
            $item3 = (2 * ($_POST["item1"]) + 3 * ($_POST["item2"]));
            ?>
            <li class="list-group-item list-group-item-primary" id="nomeLista">
                <?= $nome ?>
            </li>
            <li class="list-group-item list-group-item-secondary" id="idadeLista">
                <?= $idade ?>
            </li>
            <li class="list-group-item list-group-item-success" id="cpfLista">
                <?= $cpf  ?>
            </li>
            <li class="list-group-item list-group-item-danger" id="valorLista">
                <?= $item3 ?>
            </li>
        </ul>
    </div>

</body>

</html>