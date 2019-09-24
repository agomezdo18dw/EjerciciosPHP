<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/6.Parque</title>
</head>
<body>
    <p>Hacer un programa que nos muestre los números y sus cuadrados
        mientras el cuadrado sea menor que 100.</p>
    <p><b>Cuadrados:</b></p>
    <?php
    	for($i = 1; $i * $i <= 100; $i++)
		    echo "$i<sup>2</sup> = ".$i * $i."<br>";
	?>
</body>
</html>