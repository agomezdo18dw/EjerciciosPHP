<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/1.Comunidad</title>
</head>
<body>
	<?php
    //Calculamos aleatoriamente pisos y puertas de un edificio
	$pisos = rand(1,10);
    $puertas = rand(2, 5);
    //Mostramos los datos calculados
    echo "Numero de pisos: $pisos <br>
          Numero de puertas: $puertas <br>
          <h4>Listado de viviendas:</h4>";
    //Calculamos por cada piso cuantas puertas hay
    for ($i = 1; $i <= $pisos; $i++){
        for ($j = 1; $j <= $puertas; $j++){
            echo "Piso $i - Puerta $j<br>";
        }
    }
	?>
</body>
</html>