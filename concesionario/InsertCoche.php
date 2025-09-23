<?php include_once "ConexionDB.php";
function insertarCoche(){
    $conn = dbAcces();
    
    $matricula = $_POST["matricula"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $km = $_POST["km"];

    $statement = $conn->prepare("INSERT INTO coche (matricula,marca,modelo,km) VALUES (?,?,?,?)");
    $statement->bind_param("issi",$matricula,$marca,$modelo,$km);

    $statement->execute();
}

insertarCoche();

header('Location: datos.php');