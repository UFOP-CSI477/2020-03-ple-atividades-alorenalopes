<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/dados/estados.css">
</head>

<body>

    <div id="estados_css">
        <table class="table">

            <thead class="thead-dark">
                <tr>
                    <th>Estados</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($e = $estados->fetch()) {
                    echo "<tr>" . "<th>" . $e["nome"] . "</th>" . "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>