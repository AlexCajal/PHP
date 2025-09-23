<?php
function dbAcces(){
    $server = "dbphp.c3makgecek8k.us-east-1.rds.amazonaws.com";
    $user = "admin";
    $PSW = "admin12345.";
    $conn = new mysqli($server,$user,$PSW, "Coches");

    if ($conn->connect_error){
        echo "<p>failed<p>";
    }

    return $conn;
}