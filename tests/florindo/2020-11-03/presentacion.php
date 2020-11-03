<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Presentación</title>
    <style>
        body,h1,h2 {font-family: "Roboto", sans-serif, arial;}
        body {
            border: 1px solid black;
            background-color: lightblue;
            width: 250px;
            top: 43px;
            bottom: 0;
            height: inherit;
        }
        h1{
            color: white;
            text-align: center;
        }
        form {
            border: 5px solid black;
            background-color: white;
            padding-top: 50px;
            padding-right: 30px;
            padding-bottom: 50px;
            padding-left: 80px;
            }
        <
    </style>
</head>
<body>

    <?php
     $nombre = 'José Luis';
     $apellidos = 'García Garrachón';
     $foto = "<img src=https://estaticos.elperiodico.com/resources/jpg/8/7/gorila-harambe-una-imagen-facilitada-por-zoo-cincinatti-1464589200278.jpg";
     $edad = 20; 
     $curso = array("Bachillerato", "ASIR");
        echo "<h1> Presentación  de $nombre.$apellidos</h1> <br>";
        echo " <b>Nombre: </b> $nombre <br>";
        echo " <b>Apellidos: </b> $apellidos <br>";
        echo " <b>Edad: </b> $edad <br>";
        echo " <b>Foto personal: </b>$foto <br>";
        echo "Cursos realizados:<br>";
        echo  "1/ $curso[0] <br>";
        echo  "2/ $curso[1] <br>";

        echo "formulario para comentar:"<br>;

        <form action="form.php" method="post"" name="comentario" id ="comentario">
            <br>
            Escribir aqui: <br><textarea cols="100" rows="10" name="comentario"></textarea>
            <br>
            <input type="submit" value="Enviar comentario">
            <input type="Reset" value="Borrar comentario">

        </form>
    ?> 


</body>
</html>