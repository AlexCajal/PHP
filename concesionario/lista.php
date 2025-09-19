<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $mat = $_POST["matricula"];
        $mar = $_POST["marca"];
        $mod = $_POST["modelo"];
        $km = $_POST["km"];

        include_once "encabezado.php";
        include_once "coche.php";
        include_once "infoCoches.php";

        
       
        $cocheAniadido = new Coche($mat,$mar,$mod,$km);
         
        if ($mat != null){
            array_push($listacoches, $cocheAniadido);
        }

        $buscador = $_GET["matric"];
        echo '<ul>';
        foreach($listacoches as $coche){
            if ($buscador == null){
                $coche->muestra();
            }else if (strcmp($coche->get_Matricula(),$buscador)==0){
                    $coche->muestra();
                }
            }           
        echo '</ul>';
    ?>

</body>
</html>