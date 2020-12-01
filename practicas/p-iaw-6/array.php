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
            $provincias=array('León', 'Palencia', 'Burgos', 'Salamanca', 'Ávila', 'Segovia', 'Valladolid', 'Soria' , 'Zamora');
                function cyl($provincias)
                {
                    echo "<ol>";
                        foreach ($provincias as $p)
                        {
                            echo "<li>".$p."</li>";
                        }
                    echo "</ol>";
                }   
                cyl($provincias);         
        ?>
    </body>
</html>