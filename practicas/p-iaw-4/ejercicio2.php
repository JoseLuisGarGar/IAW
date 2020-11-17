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
        echo "<form action='ejercicio2post.php' method='POST' enctype='multipart/form-data'>";
        echo "Introduce 2 números y te digo el mayor<br>";
        echo "Número 1: <input type='number' name='n1'><br>";
        echo "Número 2: <input type='number' name='n2'><br>";
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
        ?>
    </body>
</html>