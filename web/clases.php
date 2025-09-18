<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Noticia{
            public $nombre;
            public $fecha;

            function __construct($nombre, $fecha){
                $this->nombre = $nombre;
                $this->fecha = $fecha;
            }
            function pintarNoticia(){
                echo '<a href="vista.php?titulo='.$this->nombre.'">'.$this->nombre."--".$this->fecha."<a>";
            }
            function getname(){
               return $this->nombre; 
            }
        }
    ?>
</body>
</html>