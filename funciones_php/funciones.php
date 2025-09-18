<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function procedimientoSuma($a,$b){
            return $a + $b;
        } 
        function suma($a,$b){
            echo "<p>".$a+$b."</p>";
        } 
        function sumareferencia($resultado,$a,$b){
            $resultado = $a + $b;
        }
    ?>
</body>
</html>