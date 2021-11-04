<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli("localhost", "root", "", "zsl_3Pi1T_g2");
    $sql = "SELECT * FROM `users`";
    $result = $connect-> query($sql);
    // $user = $result->fetch_assoc();
    // print_r($user);

    while ($user=$result->fetch_assoc()){
    echo <<< USER
        Id: $user[id] <br>
        Imię i nazwisko: $user[name] $user[surname]
        <hr>
USER;
    }
    ?>
</body>
</html>