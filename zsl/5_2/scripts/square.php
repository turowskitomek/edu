<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwadrat</title>
</head>
<body>
    <h3>Kwadrat</h3>
    <form method='get'>
        <input type = 'text' name = 'sideA' placeholder = 'Podaj długość boku a'><br><br>
        <input type='submit' name='button' value = 'Oblicz'><br><br>
    </form>

    <?php
    if (isset($_GET['button'])){
        if (!empty($_GET['sideA']) && $_GET['sideA'] > 0){
            $sideA = str_replace(',','.',$_GET['sideA']);
            $pole = $sideA**2;
            $obwod = $sideA*4;
        
            echo <<< RESULT
            <hr>
            Pole = $pole cm<sup>2</sup><br>
            Obwód = $obwod cm
RESULT;
        }
        else{
            echo "Podano złe dane";
        }
    }
    ?>


</body>
</html>