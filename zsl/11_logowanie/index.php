<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <?php
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
    <h3>Logowanie użytkownika</h3>
    <form action="./script/login.php" method="post">
        <input type="text" name="login" placeholder="Podaj login"><br><br>
        <input type="password" name="pass" placeholder="Podaj hasło"><br><br>
        <input type="submit" value="Zaloguj się">
    </form>
    <hr>
    <a href="pages/register.php">Zarejstruj się</a>
</body>
</html>