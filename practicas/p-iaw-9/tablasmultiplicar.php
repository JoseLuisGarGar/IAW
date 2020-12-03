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
        echo "<form action='tablasmultiplicar.php' method='POST' enctype='multipart/form-data'>";
        echo "<h2>Introduce el nº de la tabla que quieras</h2>";
        echo "Número: <input type='number' name='num' min='1' max='9'><br>";
        echo "<input type='submit' value='Crear tabla' name='boton'><br>";
        echo "</form>";
        if (isset($_POST['boton']))
        {
            if ($_POST['num'] != "")
            {

            echo "<h3>Tabla del ".$_POST['num']."</h3>";
            echo "<ul>";
            for ($i = 1; $i<=10; $i++) {
                $resultado=$_POST['num']*$i;
                echo "<li>".$_POST['num']."*".$i."=".$resultado."</li>";
            } 
            echo "</ul>";
            } else {
                echo "Introduce un número.";
            }
            
        }   
        ?>
    </body>
</html>