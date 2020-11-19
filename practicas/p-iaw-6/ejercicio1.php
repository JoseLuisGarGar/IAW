
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
        <ol>
            <?php
            $servername="127.0.0.1";
            $database = "world";
            $username = "test";
            $password = "test";
            $limite=40;
            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn)
                {
                    die("connection failed.". mysqli_connect_error());
                }
            function consulta($limite, $conn)
            {  
                $query="SELECT * FROM city LIMIT ".$limite;
                $resultado = $conn->query($query);
                return $resultado;           
            }
            $resultado = consulta($limite,$conn);
            while ($row = $resultado->fetch_array())
            {
                echo "<li>".$row['Name']." pertenece al distrito ".$row['District']."</li>";
            }
            mysqli_close($conn);
            ?>
        </ol>
    </body>
</html>