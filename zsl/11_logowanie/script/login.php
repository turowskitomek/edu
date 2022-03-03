<?php session_start();

foreach ($_POST as $key => $value) {
    if (empty($value)){
        $_SESSION['error']="Wypełnij wszystkie pola np. $key";
        echo "<script>history.back();</script>";
        exit();
    }
}

require_once "connect.php";

$sql = "SELECT * FROM `user` WHERE `email` = ?";

$stmt =  $connect -> prepare($sql);
$stmt -> bind_param("s", $_POST['login']);
$stmt -> execute();

$result = $stmt -> get_result();
$user = $result->fetch_assoc();

if(!empty($user)){
    $verify = password_verify($_POST['pass'], $user['password']);
    
    if($verify){
        echo "zalogowano jako $user[name] $user[surname]";
    }
    else{
        $_SESSION['error'] = "Podano złe hasło lub login";
        echo "<script>history.back()</script>";
    }
}
else{
    $_SESSION['error'] = "Podano złe hasło lub login";
    echo "<script>history.back()</script>";
}
exit();
?>
