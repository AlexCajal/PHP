<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 6;
        $y = 1;
        ;
        $suma = $x + $y;
        echo ("<p>"."x = ".$x."</p>");
        echo ("<p>"."y = ".$y."</p>");
        if ($suma > 10){
            echo ("<p>"."suma = ".$suma."</p>");
        }else{
            echo ("<p><del>"."suma = ".$suma."</del></p>");
        }
    ?>
</body>
</html>