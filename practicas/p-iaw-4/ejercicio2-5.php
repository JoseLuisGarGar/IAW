<html>
    <head>
        <title>Ejercicio2-5</title>
        <style>
            body {
                line-height:25px;
            }
        </style>
    </head>
    <body>    
        <?php
         $n1=24;
         $n2=247;
         function getGratherValue($n1, $n2) {
            if ($n1 > $n2) {
                echo "$n1 es mayor a $n2";
            } elseif ($n2 > $n1) {
                echo "$n1 es menor a $n2";
                } else {
                    echo "Son iguales";
                }
            }
            getGratherValue ($n1, $n2);
        ?>
    </body>
</html>