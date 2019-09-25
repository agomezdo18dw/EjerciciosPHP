<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/1.ArrayNumerosFactorial</title>
</head>
<body>
    <p>Escribe el código necesario para que se creen dos arrays: en
    el primero se almacenan los 10 primeros números naturales
    (empezando por el 0). En el segundo se almacena el valor del
    factorial del número incluido en la misma posición del primer
    array.</p>
	<?php
    $naturales = [];
    $factoriales = [];
    $numero = 0;
    $factorial;
    for ($i = 0; $i < 10; $i++){
        $naturales[$i] = $i;
    }
    for ($i = 0; $i < count($naturales); $i++){
        $numero = $naturales[$i];
        if($numero == 0)
            $factorial = 1;
        else
            for ($j = 1; $j <= $numero; $j++){
                $factorial = $factorial * $j;
            }
        $factoriales[$i] = $factorial;
    }
    foreach ($factoriales as $valor){
        echo "$valor, ";
    }
	?>
</body>
</html>