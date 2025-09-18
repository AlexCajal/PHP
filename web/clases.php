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
                echo $this->nombre."--".$this->fecha;
            }
            function getname(){
               return $this->nombre; 
            }
            function setname($nom){
                $this->nombre = $nom; 
            }
            function setfecha($fech){
                $this->fecha = $fech; 
            }
        }
    ?>
</body>
</html>