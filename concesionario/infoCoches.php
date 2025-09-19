<?php
include_once "coche.php";
    $coche1 = new Coche(1,"Opel","Corsa",10000);
    $coche2 = new Coche(2,"Ford","Focus",20000);
    $coche3 = new Coche(3,"Renault","Megane",30000);

    $listacoches = array($coche1,$coche2,$coche3);
?>