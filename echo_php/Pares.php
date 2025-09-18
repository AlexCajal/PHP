<!DOCTYPE html>

<html>
    <body>
        <h1>Pares<h1>
        <?php
        for ($i=0; $i <= 10; $i++) { 
            if ($i%2 == 0){
                echo '<h2>'.$i.'<h2>';
            }
        } 
        ?>
        <h1>Impares<h1>
            <?php
        for ($i=0; $i <= 10; $i++) { 
            if ($i%2 == 1){
                echo '<h2>'.$i.'<h2>';
            }
        } 
        ?>
    </body>
</html> 