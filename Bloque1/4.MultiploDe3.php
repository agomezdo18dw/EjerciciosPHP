<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/4.MultiploDe3</title>
</head>
<body>
    <p>Dado un número indica si es múltiplo de 3.</p>
	<?php
    //Calculamos aleatoriamente un numero
	$num1 = rand(0, 100);
    //Mostramos el numero calculado
    echo "El numero es: $num1 <br>
          <br>";
    //Calculamos si el numero es multiplo de 3
    for ($i = 0; $i < $num1; $i++){
        for ($i % 3 == 0)
        echo "El numero $num1 es multiplo de 3"
    }
	?>
</body>
</html>