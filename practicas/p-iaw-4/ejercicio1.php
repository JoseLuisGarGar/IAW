<html>
    <head>
        <title>Ejercicio2</title>
        <style>
            body {
                line-height:25px;
            }
        </style>
    </head>
    <body>    
        <?php
         $n1=245;
         $n2=24;
         if ($n1 > $n2) {
            echo "$n1 es mayor a $n2";
         }elseif ($n2 > $n1) {
            echo "$n2 es mayor a $n1";
         } else {
            echo "Son iguales";
         }
        ?>
    </body>
</html>