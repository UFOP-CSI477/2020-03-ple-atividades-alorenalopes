<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\Users\bruno\Documents\GitHub\2020-03-ple-atividades-alorenalopes\Atividades\exercicios\Laravel\sistema\resources\css\lista.css">
</head>

<body>
    <div id="list_css">
        <table class="table">

            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Estado</th>
                    <th>Sigla</th>
                </tr>
            </thead>
            <tbody>

            <?php
                if(is_object($dados[0]) == true){
                    foreach ($dados as $lista) {
                        echo "<tr>" . "<th>" . $lista["id"] . "</th>" . "<th>" . $lista["nome"] . "</th>" . "<th>" . $lista["sigla"] . "</th>" . "</tr>";
                    }
                }else{
                    $lista = $dados;
                    echo "<tr>" . "<th>" . $lista["id"] . "</th>" . "<th>" . $lista["nome"] . "</th>" . "<th>" . $lista["sigla"] . "</th>" . "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>