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
        echo "<form action='ejercicio1post.php' method='POST' enctype='multipart/form-data'>";
        echo "<input type='hidden' name='formulario' value='FormularioFiesta'>";
        echo "Nombre de la fiesta <input type='text' name='nombre'><br>";
        echo "Número de personas <input type='number' name='personas' min ='0'><br>";
        echo "Tipo de fiesta";
        echo "<input type='radio' name='pública' value='pública' checked> Pública";
        echo "<input type='radio'  name='privada' value='privada'> Privada <br>";
        echo "Tipo de música ";
        echo "<select name='musica'>";
        echo "<option value='pop'>Pop</option>";
        echo "<option value='rock'>Rock</option>";
        echo "<option value='jazz'>Jazz</option>";
        echo "<option value='indie'>Indie</option>";        
        echo "</select><br>";
        echo "Espacios para la fiesta:<br> <input type='checkbox' name='espacio[]' value='barras' > Barras<br>";
        echo "<input type='checkbox'  name='espacio[]' value='escenarios' checked> Escenarios<br>";
        echo "<input type='checkbox'  name='espacio[]' value='jardin'> Jardín<br>";
        echo "<input type='checkbox'  name='espacio[]' value='zonachill'> Zona Chill<br>";
        echo "<input type='checkbox'  name='espacio[]' value='etc'> Etc<br>";
        echo "Comentario de interés sobre a fiesta <br>";
        echo "<textarea name='comentario' cols='40' rows='3'>";
        echo"</textarea><br>";
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";
        ?>
    </body>
</html>