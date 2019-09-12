<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/1.Comunidad</title>
</head>
<body>
	<?php
    //Calculamos aleatoriamente tres numeros
	$num1 = rand(0, 100);
    $num2 = rand(0, 100);
    $num3 = rand(0, 100);
    //Mostramos los numeros calculados
    echo "Primer numero: $num1 <br>
          Segundo numero $num2 <br>
          Tercer numero: $num3 <br><br>";
    //Calculamos el mayor numero y lo mostramos
    if ($num1 > $num2 && $num1 > $num3)
        echo "El numero $num1 es el mayor";
    elseif ($num2 > $num1 && $num2 > $num3)
        echo "El numero $num2 es el mayor";
    elseif ($num3 > $num1 && $num3 > $num2)
        echo "El numero $num3 es el mayor";
    else
        echo "Todos los numeros son iguales"
	?>
</body>
</html>