<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rejstracja</title>
</head>
<body>
    <?php
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    ?>
    <h3>Rejstracja użytkownika</h3>
    <form action="../script/rejstracja.php" method="post">
        <input type="text" name="name" placeholder="Podaj imię"><br><br>
        <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
        <input type="email" name="email1" placeholder="Podaj adres poczty"><br><br>
        <input type="email" name="email2" placeholder="Powtórz adres poczty"><br><br>
        <input type="password" name="pass1" placeholder="Podaj hasło"><br><br>
        <input type="password" name="pass2" placeholder="Powórz hasło"><br><br>
        <input type="date" name="birthday">Data urodzenia<br><br>
        <select name="city">
        <?php
            require_once "../script/connect.php";
            $request = $connect -> query("SELECT * FROM `city`");

            while($city = $request -> fetch_assoc()){
                echo "<option value='$city[id]'>$city[city]</option>";
            }
        ?>
        </select><br><br>
        <input type="submit" value="Zarejstruj się">
    </form>
</body>
</html>