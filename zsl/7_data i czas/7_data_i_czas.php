<?php
// data()
echo "dzien-miesiąc-rok ".date('d-m-Y')."<br>";
echo date('d-M-Y')."<br>";
echo date('d-F-Y')."<br>"; //28-October-2021

setlocale(LC_ALL, 'polish');
echo strftime('%d %B %Y')."<br>";

echo date('G:i:s')."<br>";//17:15:07
echo date('G:i:sa')."<br>";//17:15:07pm
echo date('H:i:s')."<br>";//17:15:32
echo date('L');// 0-rok nie jset przestępny
?>

<script>
    setTimeout(function(){
        //window.location.reload();
    }, 1000);
</script>

<?php
// getdate()
$date=getdate();
print_r($date);
echo '<br>'.$date['wday'].'<br>';//4
echo $date['yday']+1 .'<br>';//301
echo $date['0']+1 .'<br>'; //1635434773
// znacznik czasu od 1970 r

// mktime()
$today = mktime(0, 0, 0, 10, 28, 2021);
echo $today."<br>"; // 1635372000
$today = mktime(date('G'), date('i'), date('s'), date('m'), date('d'), date('Y'));
echo $today."<br>"; // 1635435305
echo $date[0],"<br>"; // 1635435305

// ile lat minęło od 1 stycznia 1970 r
$year = $today/(60*60*24*365);
echo (int)$year." lat<br>"; // 51

// poprzedni rok
$lastYear = mktime(date('G'), date('i'), date('s'), date('m'), date('d'), date('Y')-1);
$lastYear = $lastYear/(60*60*24*365);
echo (int) $lastYear." lat<br>"; // 50
?>
