<html>
    <head>
        <title>Ejercicio3</title>
    </head>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 150%;
        }
        th {
            background: lightblue;
        }
    </style> 
<body>
    <?php 
        echo "<table>";/* Abrimos la tabla */
        echo "<tr>";
        echo "  <th> Día actual  </th>";/* Seleccionamos lo que necesitamos: Fecha y hora */
        echo "  <th> Hora actual  </th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> " . date('l, j/F/o') . "</td>";/* Con la funcion date, tenemos que l es el día de la semana, con j el día del mes sin ceros a la izquierda, F el mes escrito y con o el el año con la norma ISO-8601</ISO-8601> */
        echo "<td> " . date('g:i:s a, e') . "</td>";/* Siguiendo con date usaremos g para la hora en formato 12 horas, i para mostar los minuto sin ceros delante, s para segundos sin ceros delante, a para el formato am/fm y e para la zona desde donde se hace la consulta*/
        echo "</tr>";
        echo "</table>";/* Cerramos la tabla */
    ?>
</body>
</html>
