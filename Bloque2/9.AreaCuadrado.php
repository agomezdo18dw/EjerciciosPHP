<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/9.AreaCuadrado</title>
    <style>
    </style>
</head>
<body>
    <p>Crea una función que dado un lado calcule el área de un cuadrado. Deberá lanzar una excepción en caso de que el lado sea un número negativo.<br>
    Crea un array con cinco números aleatorios (asegurate de que el array contiene un número negativo) y 
    ejecuta la función sobre cada uno de los elementos del array.</p>
	<?php
        //Funcion que calcula area de un cuadrado y lanza una excepcion si el lado es 0
        function area($lado){
            if ($lado < 0)
                throw new Exception ("El lado no puede ser negativo");
            else
                return pow($lado, 2);
        }
        //Inicializamos el array
        $numeros = [];
        //Llenamos el array con numeros
        for ($i = 0; $i < 4; $i++){
            $numeros[$i] = rand (1, 100);
        }
        //Y un numero negativo
        array_push($numeros, rand(-100,-1));
        //Enseñamos el array
        echo "<b>El array es:</b><br>";
        $cont = 0;
        foreach ($numeros as $numero){
            echo "$numero";
            if ($cont < 4)
                echo ", ";
            else
                echo ".<br>";
            $cont++;
        }
        //Enseñamos las areas
        echo "<br><b>Areas:</b><br>";
        $num = 1;
        foreach ($numeros as $lado){
            echo "$num - El area del cuadrado con el lado $lado es: ".area($lado)."<br>";
            $num++;
        }
	?>
</body>
</html>