<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        include "encabezado.php";
        include "coche.php";
        include "getCoches.php";

        $listacoches = SacarCoches();        

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