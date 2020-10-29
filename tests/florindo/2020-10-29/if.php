<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $n1 = rand(1,3);
  if ($n1==3)
  {
      echo "El numero es el 3.";
  } else {
      if ($n1==2)
      {
         echo "El numero es el 2." ;
      } else {
          echo "El numero es el 1.";
      }
      
  }
  ?>
</body>

</html>