<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "form.php";
        echo "<br>";
    ?>
    <?php include "clases.php";
        $inicio = new Noticia("Inicio de curso","2025/9/11");
        $titulo2 = new Noticia("Titulo2","2025/09/01");
       
        $noticias = array($inicio,$titulo2);

        $titulo = $_GET["titulo"];
        
        if ($titulo == null){
            foreach($noticias as $x){
            $x->pintarNoticia();
            echo "<br>";
            }
        }else{
            foreach($noticias as $x){
               if (strcmp($x->getname(),$titulo)==0){
                   $x->pintarNoticia();
                }
            }
        }
        
    ?>
</body>
</html>

