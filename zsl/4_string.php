<?php
    $text = <<< L
        ZSŁ - Zespół
        Szkół
        Łączności<br>
L;

echo $text;
echo nl2br($text);

$name = 'jaNuSZ';
// Zamiana wszystkich liter na małe
$name=strtolower($name);
echo $name;//janusz
// Zamiana wszystkich liter na duże
echo strtoupper($name);// JANUSZ

$nameSurname = "januSZ koWALski";
// Zamiana pierwszej litery na dużą
echo ucfirst($nameSurname);// JanuSZ koWAlski

// Zamiana każdej pierwszej litery w słowie na dużą
echo ucwords($nameSurname);

// Zmiana wszystkich liter na małe a pierwszej na dużą
$name = "jAnuSZ";
echo "<br>$name";// jAnuSZ
echo ucfirst(strtolower($name));// Janusz


$lorem="Lorem asdasfjh jasfhkasdjhkasdjg sdfsdasdhasjkh asjkdhakjshiuewjskdfh sadkjfhasdjkfh fsd sdg dfsg sdfg sdfgdsfgsdfgsdf gsdfgsdfgsdfg jhasdfkjasdhfkjash asdfhkasjdfhkjsadf asdjfkhaskdj<hr>";
echo $lorem;
$col=wordwrap($lorem,30, "<br>");
$col=wordwrap($lorem,30, "TEXT");
$col=wordwrap($lorem,30, "<hr>");
echo $col;

// wyczyszczenie bufora
ob_clean();

// usuwanie białych znaków np spacja
$name="Janusz";
$name1="  Janusz ";
echo "długość \$name: ".strlen($name)."<br>";// 6
echo "długość \$name1: ".strlen($name1)."<br>";// 10

echo "długość ltrim(\$name1): ".strlen(ltrim($name1))."<br>";// 7
echo "długość rtrim(\$name1): ".strlen(rtrim($name1))."<br>";// 8
echo "długość trim(\$name1): ".strlen(trim($name1))."<hr>";// 6

// przeszukiwanie cuiągów znaków
$mail="janusz@gmail.com";
echo strstr($mail, "@");// @gmail.com
echo strstr($mail, "G");// nic nie wyświetli
echo strstr($mail, "g");// gmail.com
echo "<hr>";

// substr

echo substr($mail, 2);// nusz@gmail.com
echo substr($mail, 6);// @gmail.com
echo substr($mail, -3);// com
echo substr($mail, -2,1)."<br>";// o

//ZADANIE
$personality="Janusz Kowalski";
//do zmiennej name przypisac imię, 
//do zmiennej surname przypisać nazwisko
//wykorzystujac funkcję substr

$name=substr($personality,0,6);
$surname=substr($personality,-8);

echo $name. $surname;

?>