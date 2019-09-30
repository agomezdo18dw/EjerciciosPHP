<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/7.Potencias</title>
    <style>
    </style>
</head>
<body>
    <p>Escribe una función para calcular potencias. Recibe como argumentos la base y el exponente, que es opcional y tiene por
    defecto 2 (elevar al cuadrado).</p>
	<?php
        //Funcion que calcula numeros entre el 2 y el 10 aleatoriamente
        function calcularN(){
            $n = rand (2, 10);
            return $n;
        }
        //Funcion que calcula las potencias de los numeros calculados anteriormente
        function potencia($base, $exponente = 2) {
            echo "El resultado de $base<sup>$exponente</sup> es: <br>";
            return pow($base, $exponente);
        }
        //Mostramos la respues de la potencia de dos numeros aleatorios entre el 2 y el 10
        echo potencia(calcularN(), calcularN())
        
	?>
</body>
</html>