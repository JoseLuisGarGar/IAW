<HTML>
  <BODY>
    <?php
      echo "El nombre de la fiesta será: ".$_POST['nombre']. "<br>";
      echo "El número de personas que acudiran: ".$_POST['personas']. " personas</br>";
      echo "La fiesta será: ".$_POST['pública']. "<br>";
      echo "El tipo de musica sera: ".$_POST['musica']. "<br>";
      if($_POST['espacio']){
        $espacios = "";
        foreach ($_POST['espacio'] as $key => $value) {
            $espacios = $espacios.$value."<br>";
        }
        echo "Los espacios elegidos son: <br>".$espacios."</br>";
        }else{
        echo "No ha puesto ninguna opción. </br>";
            }      
      echo "Comentarios del cliente: ".$_POST['comentario'];
    ?>
  </BODY>
</HTML>