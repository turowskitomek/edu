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

?>

</body>
</html>
