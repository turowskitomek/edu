<form method="post">
    Od<br>
    <input type="date" name="date1"><br>
    Do<br>
    <input type="date" name="date2"><br>
    <input type="submit" name="button" value="OK">
</form>

<?php
if(isset($_POST["button"])){
    if(!empty($_POST['date1']) && !empty($_POST['date2'])){
        $date1 = explode("-", $_POST["date1"]);
        $date2 = explode("-", $_POST["date2"]);
        $days1 = mktime(0, 0, 0, $date1[1], $date1[2], $date1[0]);
        $days2 = mktime(0, 0, 0, $date2[1], $date2[2], $date2[0]);
        $help = 0;

        if($days1<$days2){
            $help = $days1;
            $days1 = $days2;
            $days2 = $help;
        }
        else if($days1>$days2){
            $help = $date1;
            $date1 = $date2;
            $date2 = $help;
        }
        $years = floor(($days1 - $days2)/(60*60*24*365));
        $days = floor(($days1 - $days2)/(60*60*24));
        echo "Od: ".$date1[2].":".$date1[1].":".$date1[0]."<br>";
        echo "Do: ".$date2[2].":".$date2[1].":".$date2[0]."<br>";
        echo "Różnica dni: ".$days."<br><br>";

        // $months = floor($days/30) - $years*12;
        // $days = $days - ($years*12*30 + $months*30); 
        // echo $years.", ".$months.", ".$days." (lata, miesiące, dni)";
    }
    else{
        echo "Data jest niepoprawna";
    }
}
?>
