<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Użytkownicy</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
    require_once './scripts/connect.php';
    // $sql = "SELECT * FROM `users`";
    $sql = "SELECT * FROM `users` INNER JOIN `cities` ON `users`.`cityid`=`cities`.`cityid`";
    $result = $connect-> query($sql);

    if(isset($_GET['error'])){
        echo "<h3>$_GET[error]</h3>";
    }
    echo <<< TABLE
        <table>
            <tr>
                <th>Id</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Data urodzena</th>
                <th>Dodanie konta</th>
                <th>Miasto</th>
            </tr>
TABLE;
    while ($user=$result->fetch_assoc()){
    echo <<< USER
        <tr>
            <td>$user[id]</td>
            <td>$user[name]</td>
            <td>$user[surname]</td>
            <td>$user[birthday]</td>
            <td>$user[create_date]</td>
            <td>$user[city]</td>
            <td><a href="./scripts/deleteUser.php?userId=$user[id]">Usuń</a></td>
        </tr>
USER;
    }
    echo "</table>";
    if (isset($_GET['addUser'])){
        echo <<< FORMADDUSER
        <h4>Dodawanie użytkownika</h4>
        <form action="./scripts/add_user.php" method="post">
            <input type="text" name="name" placeholder="Podaj imię"><br><br>
            <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
            <input type="date" name="birthday">Data urodzeni<br><br>
            <input type="text" name="cityid" placeholder="Podaj miasto"><br><br>
            <input type="submit" value="Dodaj użytkownika"><br><br>
        </form>
FORMADDUSER;
    }
    else{
        echo "<br><a href='8_4_select_db_table_delete_insert.php?addUser='>Dodaj użytkownika</a>";
    }
    $connect -> close();
    ?>


</body>
</html>