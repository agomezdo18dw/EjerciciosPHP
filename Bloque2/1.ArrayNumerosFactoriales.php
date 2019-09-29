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
    //Inicializamos los dos array
    $naturales = [];
    $factoriales = [];
    //Creamos variable en la que meter el valor del numero del array naturales
    $numero;
    //Creamos variable en el que meter el valor del factorial
    $factorial = 1;
    
    //Creamos un bucle que complete el array de los numeros naturales
    for ($i = 0; $i < 10; $i++){
        $naturales[$i] = $i;
    }

    //Escribimos el array de numeros naturales
    echo "Array de numeros naturales: <br>";
    foreach ($naturales as $valor1){
        echo "$valor1";
        if ($valor1 < 9)
            echo ", ";
        else
            echo ".";
    }
    echo "<br><br>";

    //Bucle que completa array de factoriales al calcular el factorial mediante una funcion
    for ($i = 0; $i < count($naturales); $i++) {
        $factoriales[$i] = factorial($naturales[$i]);
    }

    //Funcion que calcula el factorial del numero que le mandamos
    function factorial($numero) {
        $res = 1;
        for($i = 1; $i <= $numero; $i++){
            $res = $res * $i;
        }
        return $res;
    }
    
    //Escribimos array de los factoriales
    echo "Array factoriales: <br>";
    $cont = 0;
    foreach ($factoriales as $valor2){
        echo "$valor2";
        if ($cont < 9)
            echo ", ";
        else
            echo ".";
        $cont++;
    }
	?>
</body>
</html>