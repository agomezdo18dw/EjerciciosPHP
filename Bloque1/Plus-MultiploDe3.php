<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Plus-MultiploDe3</title>
</head>
<body>
    <p>Dado un número indica si es múltiplo de 3.</p>
	<?php
    //Calculamos aleatoriamente un numero
	$num1 = rand(0, 100);
    //Mostramos el numero calculado
    echo "<p><b>El numero es:</b> $num1</p>";
    //Calculamos si el numero es multiplo de 3
    if ($num1 % 3 == 0)
        echo "<p>El numero $num1 es multiplo de 3</p>";
    elseif ($num1 == 0)
        echo "<p>El numero $num1 no es multiplo de 3</p>";
    else
        echo "<p>El numero $num1 no es multiplo de 3</p>";
	?>
</body>
</html>