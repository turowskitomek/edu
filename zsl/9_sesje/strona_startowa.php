<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Startowa</title>
</head>
<body>
    <h4>Strona startowa</h4>
    <?php
        $_SESSION['name']="Janusz";
        echo session_id();
        session_destroy();
    ?>
    <hr>
    <a href="./druga.php">Strona druga</a>
</body>
</html>