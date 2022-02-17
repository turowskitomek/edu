<?php session_start();

foreach ($_POST as $key => $value) {
    if (empty($value)){
        $_SESSION['error']="Wypełnij wszystkie pola np. $key";
        echo "<script>history.back();</script>";
        exit();
    }
}

require_once "connect.php";

$sql = "SELECT * FROM user WHERE `email` = '$_POST[login]'";

$user = $connect -> query($sql) -> fetch_assoc();

if(!empty($user)){
    $verify = password_verify($_POST['pass'], $user['password']);
    
    if($verify){
        echo "zalogowano";
    }
    else{
        $_SESSION['error'] = "Podano złe hasło";
        echo "<script>history.back()</script>";
    }
}
else{
    $_SESSION['error'] = "Nie ma takiego emaila";
    echo "<script>history.back()</script>";
}
exit();
?>
