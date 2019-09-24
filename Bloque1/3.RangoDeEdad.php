<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/3.RangoDeEdad</title>
</head>
<body>
	<?php
    //Calculamos aleatoriamente la edad
	$edad = rand(0, 100);
    //Mostramos la edad calculada
    echo "Edad: $edad <br>";
    //Calculamos el rango de edad y lo mostramos
    if ($edad >= 0 && $edad <= 10)
        echo "La edad $edad esta entre el 0 y el 10";
    elseif ($edad >= 11 && $edad <= 20)
        echo "La edad $edad esta entre el 11 y el 20";
    elseif ($edad >= 21 && $edad <= 30)
        echo "La edad $edad esta entre el 21 y el 30";
    elseif ($edad >= 31 && $edad <= 40)
        echo "La edad $edad esta entre el 31 y el 40";
    elseif ($edad >= 41 && $edad <= 50)
        echo "La edad $edad esta entre el 41 y el 50";
    elseif ($edad >= 51 && $edad <= 60)
        echo "La edad $edad esta entre el 51 y el 60";
    elseif ($edad >= 61 && $edad <= 70)
        echo "La edad $edad esta entre el 61 y el 70";
    elseif ($edad >= 71 && $edad <= 80)
        echo "La edad $edad esta entre el 71 y el 80";
    elseif ($edad >= 81 && $edad <= 90)
        echo "La edad $edad esta entre el 81 y el 90";
    else
        echo "La edad $edad esta entre el 91 y el 100";
	?>
</body>
</html>