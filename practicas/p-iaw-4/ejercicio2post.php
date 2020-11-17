<HTML>
  <BODY>
    <?php
      
      if($_POST['n1'] > $_POST['n2']){
        echo "El número mayor será: ".$_POST['n1'];
      }  elseif ($_POST['n2'] > $_POST['n1']) {
        echo "El número mayor será: ".$_POST['n2'];
      } else {
        echo "Son iguales";
      }
    ?>
  </BODY>
</HTML>