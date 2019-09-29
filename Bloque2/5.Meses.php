<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/5.Meses</title>
    <style>
    </style>
</head>
<body>
    <p>Crea un un array con los meses del año y para cada mes el número de días que tendrá éste año.</p>
	<?php
    //Creamos el array
    $meses = [
		"Enero" => 31,
		"Febrero" => 28,
		"Marzo" => 31,
		"Abril" => 30,
		"Mayo" => 31,
		"Junio" => 30,
		"Julio" => 31,
		"Agosto" => 31,
		"Septiembre" => 30,
		"Octubre" => 31,
		"Noviembre" => 30,
		"Diciembre" => 31
    ];
    //Mostramos los meses
    print_r($meses);
	?>
</body>
</html>