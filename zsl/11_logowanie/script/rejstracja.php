<?php
    session_start();
    foreach ($_POST as $key => $value) {
        if (empty($value)){
            $_SESSION['error']="Wypełnij wszystkie pola np. $key";
            echo "<script>history.back();</script>";
            exit();
        }
    }
    $error = 0;

    if($_POST['pass1'] != $_POST['pass2']){
        $_SESSION['error'] = "Hasła są różne";
        $error = 1;
    }

    if($_POST['email1'] != $_POST['email2']){
        $_SESSION['error'] = "Adresy poczty są różne";
        $error = 1;
    }
    
    if($error != 0){
        echo "<script>history.back();</script>";
        exit();
    }

    require_once "./connect.php";

    $pass = password_hash($_POST["pass1"], PASSWORD_DEFAULT);
    echo $pass;
    $stmt = $connect -> prepare("INSERT INTO user(name, surname, email, birthday, password, cityid) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt -> bind_param("sssssi", $_POST['name'], $_POST['surname'], $_POST['email1'], $_POST['birthday'], $pass, $_POST["city"]);

    $stmt -> execute();

    if($connect -> affected_rows == 1){
        $_SESSION['error'] = "Dodanie użytkownika o adresie: $_POST[email1] powiodło się";
        header("location: ../index.php");
    } else{
        $_SESSION['error'] = "Dodanie użytkownika nie powiodło się";
        echo "<script>history.back()</script>";
    }
    exit();
    // Dodaj pole z miastami pobranymi z tanbeli city (select option)
    // Zmodyfikuj zapytanie do bazy dodające użytkownika (insert)
?>