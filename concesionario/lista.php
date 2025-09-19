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
        
        $coche1 = new coche(1,"Opel","Corsa",10000);
        $coche2 = new coche(2,"Ford","Focus",20000);
        $coche3 = new coche(3,"Renault","Megane",30000);

        $listacoches = array($coche1,$coche2,$coche3);

        $mat = $_POST["matricula"];
        $mar = $_POST["marca"];
        $mod = $_POST["modelo"];
        $km = $_POST["km"];
       
        $cocheAniadido = new coche($mat,$mar,$mod,$km);
         
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