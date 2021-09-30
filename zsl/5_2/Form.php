<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figury geometryczne</title>
</head>
<body>
    <h3>Figury geometryczne</h3>
    <form action='./scripts/script.php' method = 'post'>
        <input type='text' name = 'name' placeholder = 'Podaj imię'><br><br>
        <input type='radio' name = 'geometricFigure' value = 'kwadrat'>Kwadrat<br><br>
        <input type='radio' name = 'geometricFigure' value = 'prostokat'>Prostokąt<br><br>
        <input type = 'submit' value = 'zatwierdż dane'>
    </form>
    <?php

    ?>
</body>
</html>