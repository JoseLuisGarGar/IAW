<HTML>
  <BODY>
    <?php    
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
    ?>
  </BODY>
</HTML>