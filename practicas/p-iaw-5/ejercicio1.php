<html>
    <head>
        <title>Ejercicio1</title>
        <style>
            body {
                line-height:25px;
            }
        </style>
    </head>
    <body>    
        <?php
            $mail="josel.gargar@educa.jcyl.es";           
            for($con=0; $con < 10; $con++){
                $new="josel.gargar".$con;
                echo "Mi correo es: " ;
                echo str_replace("josel.gargar", $new, $mail);
                echo "<br>";
            }
    ?>
    </body>
</html>