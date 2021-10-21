<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h3>Dane pobrane z formularza</h3>

    <?php
        require_once '../functions/function.php';
        show();

        if(!empty($_POST['name'])){
            // echo showname($_POST['name']);
            echo "Imię (stare)".$_POST['name']."długość: ". strlen($_POST['name'])."<br>";
            echo "Imię po modyfikacji: ".stringValidate($_POST['name'], 10).", długość:" .strlen(stringValidate($_POST['name'], 10));
        }
    ?>
</body>
</html>