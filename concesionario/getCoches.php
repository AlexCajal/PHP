<?php include_once "ConexionDB.php";

    function SacarCoches(){

        $conn = dbAcces();
        $sql = "Select matricula,marca,modelo,km from coche";
        $result = $conn->query($sql);

        $lista = array();

        while($row = $result->fetch_assoc()){
            array_push($lista, new Coche($row["matricula"],$row["marca"],$row["modelo"],$row["km"]));
        }
        return $lista;
    }
    
