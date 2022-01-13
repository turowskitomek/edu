<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trzecia strona</title>
</head>
<body>
    <h4>Trzecia strona</h4>
    <?php
        // unset($_SESSION['name']);
        echo $_SESSION['name']."<br>";
        echo session_id()."<br>";
        session_regenerate_id();
        echo session_id()."<br>";
    ?>
    <hr>
    <a href="./strona_startowa.php">Strona startowa</a>
</body>
</html>