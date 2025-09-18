<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $navegador = "google";
        $ide = "VScode";
        $nombre = "Alex";

        $lista = array($navegador,$ide,$nombre);

        $map = array();
        
        $map['navegador'] = $navegador;
        $map['IDE'] = $ide;
        $map['Nombre'] = $nombre;
        var_dump($map);
    ?>
    
</body>
</html>