<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Druga strona</title>
</head>
<body>
    <h4>Druga strona</h4>
    <?php
        echo $_SESSION['name']."<br>";
        echo session_id()."<br>";
    ?>
    <hr>
    <a href="./trzecia.php">Strona trzecia</a>
</body>
</html>