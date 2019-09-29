<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/1.ArrayNumerosFactorial</title>
    <style>
        table {border: 1px solid black}
        td {border: 1px solid black;}
    </style>
</head>
<body>
    <p>Crea una función que reciba como parámetros dos números y cree una tabla HTML que tenga tantas filas como indique el primer 
    número y tantas columnas como indique el segundo parámetro.</p>
	<?php
    $filas = rand(1, 10);
    $col = rand(1,10);
    echo "<p><b>Tabla de $filas filas y $col columanas</b></p>";
    tabla($filas, $col);

    function tabla($filas, $col){
        echo "<table>";
        for ($i = 1; $i <= $filas; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $col; $j++) {
                echo "<td>Fila $i, columna $j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
	?>
</body>
</html>