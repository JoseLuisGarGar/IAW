<html>
    <head>
        <title>Ejercicio2</title>
    </head>
    <body>
        <?php
            $n=6; /* Inicializamos el $n a 6 para qque nos de su tabla, se puede con el numero que queramos */
            echo "Tabla del ".$n ;
            echo "<br>";
            for ($m=1;$m<11;$m++){ /* Bucle que empieza con el $n que hayamos puesto y que su primer multiplicador ser e con el que inicialicemos a $m, irá hasta el 10 y se sumará uno a $m cada vez que se complete con éxito el bucle*/
                $res=$n*$m;  
                echo "* ".$n." X ".$m." = ".$res."<br>";/* Esto nos dará la respuesta a cada multiplicacion con toda su información y nos pasará a la próxima línea */
            }
    ?> 
    </body>
</html>