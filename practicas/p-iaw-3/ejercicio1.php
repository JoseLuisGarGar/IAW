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
        <?php
        $errores = [];
        if (isset($_POST['Enviar'])){
            if($_POST['nombre'] == ""){
                $errores['nombre'] = "No se ha introducido nombre a la fiesta.";
              }
            
            if(isset($_POST['personas']) && ($_POST['personas'] == "")){
                $errores['personas'] = "No se ha introducido el nº de personas.";
            }
            if(isset($_POST['tipo']) && ($_POST['tipo'] == "")){
                $errores['tipo'] = "No se ha introducido el tipo de música.";
            }
            if((!isset($_POST['espacio'])) || (isset($_POST['espacio']) && (count($_POST['espacio']) < 2))){
                $errores['espacio'] = "No se han introducido 2 espacios o mas.";
            }
        }
        if (count($errores) == 0 && (isset($_POST['Enviar']))){
            echo "El nombre de la fiesta es: ".$_POST['nombre']. " <br>";
            echo "Acudirán ".$_POST['personas']. " personas </br>";
            echo "La fiesta será: ".$_POST['pública']. " <br>";
            echo "El tipo de musica será: ".$_POST['tipo']. " <br>";
            if(isset($_POST['espacio'])){
                $espacios = "";
                foreach ($_POST['espacio'] as $key => $value) {

                    $espacios = $espacios.$value.", ";

                }
                echo "La fiesta contará con: ".$espacios. " </br>";

            }else{
                echo "No han seleccionado espacios </br>";
            }          
        echo "Comentario sobre la fiesta (opcional del cliente): ".$_POST['comentarios']. " </br>";      
        } else {
            ?>
            <form action='ejercicio1.php' method='POST' enctype='multipart/form-data'>
            <input type='hidden' name='formulario' value='FormularioFiesta'>
            Nombre de la fiesta <input type='text' name='nombre'>
            <?php if(isset($errores['nombre'])){
            echo $errores['nombre'];
            }?>
            <br>
            Número de personas <input type='number' name='personas' min ='1'>
            <?php 
                if(isset($errores['personas'])){
                echo $errores['personas'];
            }?>
            <br>Tipo de fiesta
            <input type='radio' name='fiesta' value='pública' checked> Pública
            <input type='radio'  name='fiesta' value='privada'> Privada<br>
            Tipo de música  
            <select name='tipo'>
            <option value=''>Introduce un tipo de música</option>
            <option value='pop'>Pop</option>
            <option value='rock'>Rock</option>
            <option value='jazz'>Jazz</option>
            <option value='indie'>Indie</option>       
            </select>
            
            <?php 
            if(isset($errores['tipo'])){
            echo $errores['tipo'];
            }?>
            <br>
            Espacios para la fiesta: <br><input type='checkbox' name='espacio[]' value='barras' min="2"> Barras<br>
            <input type='checkbox'  name='espacio[]' value='escenarios' checked> Escenarios<br>
            <input type='checkbox'  name='espacio[]' value='jardin'> Jardín<br>
            <input type='checkbox'  name='espacio[]' value='zonachill'> Zona Chill<br>
            <input type='checkbox'  name='espacio[]' value='etc'> Etc<br>
            <?php if(isset($errores['espacio'])){
            echo $errores['espacio'];
            }?>
            <br>
            Comentario de interés sobre a fiesta <br>
            <textarea name='comentarios' cols='40' rows='3'>
            </textarea><br>
            <input type='submit' name='Enviar' value='Enviar' >
            </form>
        <?php    
        }
        ?>
    </body>
</html>