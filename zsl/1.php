<!DOCTYPE html>
<html>
<body>

<?php
echo 'ZSŁ<br>';
echo 'ZSŁ';
$name='Janusz';
echo '<br>Imię: $name';
echo "<br>Imię: $name<br>";

$x='Tomasz';
$y='Nowak';
echo $x.$y.'<hr>';

//typy danych
//całkowity
$calkowita=10;
$bin=0b1010;//10
$oct=011;//9
$hex=0x11;//17
echo $hex;
//zmiennoprzecinkowy
$x=100.7;

//logiczny
$prawda=true;
$falsz=false;

//składnia heredoc
$name='Krystyna';
echo <<< ETYKIETA
	<hr>Imię: $name<br>
    ZSŁ<br>
    
ETYKIETA;

$text = <<< ETYKIETA
	<hr>Anna Nowak<br>
    ZSŁ<br>
    
ETYKIETA;

echo $text;

//składnia nowdoc
echo <<< 'ETYKIETA'
	<hr>Imię: $name<br>
    ZSŁ<br>
    
ETYKIETA;

echo '<br>'.gettype($prawda);
echo '<br>'.gettype($hex);
echo '<br>'.gettype($x);

$name='Jagoda';
echo "Imię: $name, nazwisko: Turowska <hr>";
echo "Imię: \$name, nazwisko: Turowska <hr>";

$x=10;
$x++;
echo $x;//11
$x=$x++;
echo $x;//11
$y=$x++;
echo $x;//12
echo $y;//11

echo "<hr>";

$x="1";
echo $x."<br>"; //1

$x=$x++;
echo $x."<br>"; //1

$x=++$x;
echo $x."<br>"; //2

$y=++$x;
echo $x." ";    //3
echo $y."<br>"; //3

$y=$x++;
echo $x." ";    //4
echo $y."<br>"; //3

?>

</body>
</html>
