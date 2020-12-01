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
        echo "<form action='calculadora.php' method='POST' enctype='multipart/form-data'>";
        echo "Introduce 2 números para sumarlos: <br>";
        echo "Número 1: <input type='number' name='input_a'><br>";
        echo "Número 2: <input type='number' name='input_b'><br>";
        echo "<input type='submit' value='Sumar' name='sumar'>";
        echo "<input type='submit' value='Restar' name='restar'>";
        echo "<input type='submit' value='Multiplicar' name='multiplicar'>";
        echo "<input type='submit' value='Dividir' name='dividir'>";
        echo "</form>";  
        if((isset($_POST['sumar'])) || (isset($_POST['restar'])) || (isset($_POST['multiplicar'])) || (isset($_POST['dividir'])))
        {
            if($_POST['input_a'] != "" && $_POST['input_b'] != ""){
                if (isset($_POST['sumar'])){
                    $resultado=$_POST['input_a']+$_POST['input_b'];
                    echo "El resultado de sumar ".$_POST['input_a']." y ".$_POST['input_b']." es ".$resultado;
                }
                if (isset($_POST['restar'])){
                    $resultado=$_POST['input_a']-$_POST['input_b'];
                    echo "El resultado de restar ".$_POST['input_a']." y ".$_POST['input_b']." es ".$resultado;
                }
                if (isset($_POST['multiplicar'])){
                    $resultado=$_POST['input_a']*$_POST['input_b'];
                    echo "El resultado de multiplicar ".$_POST['input_a']." y ".$_POST['input_b']." es ".$resultado;
                }
                if (isset($_POST['dividir'])){
                    $resultado=$_POST['input_a']/$_POST['input_b'];
                    echo "El resultado de dividir ".$_POST['input_a']." y ".$_POST['input_b']." es ".$resultado;
                }
        } else {
            echo "No has introducido 2 numeros";
        }
        }
        ?>
    </body>
</html>