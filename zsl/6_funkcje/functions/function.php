<?php
    function show(){
        echo "Funkcja show";
    }

    function showname($name){
        return "Imię: ".$name."<br>";
    }

    function stringValidate($name, $len){
        return ucfirst(strtolower(substr(str_replace(" ", "",trim($name)), 0, $len)));
    }
?>