<html>
    <head>
        <title>Ejercicio1</title>
        <style>
            body {
                line-height:25px
            }
        </style>
    </head>
    <body>
        <form action='ejercicio1post.php' method='POST' enctype='multipart/form-data'>
        <input type='hidden' name='formulario' value='FormularioFiesta'>
        Nombre de la fiesta <input type='text' name='nombre'><br>
        Número de personas <input type='number' name='personas' min ='0'><br>
        Tipo de fiesta
        <input type='radio' name='pública' value='pública' checked> Pública
        <input type='radio'  name='privada' value='privada'> Privada <br>
        Tipo de música 
        <select name='musica'>
        <option value='pop'>Pop</option>
        <option value='rock'>Rock</option>
        <option value='jazz'>Jazz</option>
        <option value='indie'>Indie</option>        
        </select><br>
        Espacios para la fiesta:<br> <input type='checkbox' name='espacio[]' value='barras' > Barras<br>
        <input type='checkbox'  name='espacio[]' value='escenarios' checked> Escenarios<br>
        <input type='checkbox'  name='espacio[]' value='jardin'> Jardín<br>
        <input type='checkbox'  name='espacio[]' value='zonachill'> Zona Chill<br>
        <input type='checkbox'  name='espacio[]' value='etc'> Etc<br>
        Comentario de interés sobre a fiesta <br>
        <textarea name='comentario' cols='40' rows='3'></textarea>
        <br><input type='submit' value='Enviar'>
        </form>
    </body>
</html>