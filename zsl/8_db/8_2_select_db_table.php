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
    $sql = "SELECT * FROM `users`";
    $result = $connect-> query($sql);

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
            <td>$user[cityid]</td>
        </tr>
USER;
    }
    echo "</table>";
    ?>
</body>
</html>