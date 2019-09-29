<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/3.TablaAleatorios</title>
    <style>
    </style>
</head>
<body>
    <p>Crea un array de 20 números aleatorios, ordénalos de menor a mayor e indica:<br>
    - el menor de los números en color azul<br>
    - el mayor de los números en color verde<br>
    - la suma y la media (número con dos decimales) de todos los números.</p>
	<?php
    //Inicializamos el array
    $numeros = [];
    //Completamos el array con numeros aleatorios del 1 al 100
    for ($i = 0; $i < 20; $i++) {
        $num = rand(1, 100);
        $numeros[$i] = $num;
    }
    //Escribimos el array
    echo "<b>Array desordenado: </b><br>";
    $cont = 1;
    foreach ($numeros as $valor) {
        echo "$valor";
        if ($cont < 20)
            echo ", ";
        else
            echo ".<br><br>";
        $cont++;
    }
    //Ordenamos el array
    sort($numeros);
    //Escribimos el array ordenado
    echo "<b>Array ordenado: </b><br>";
    $cont = 1;
    foreach ($numeros as $valor) {
        echo "$valor";
        if ($cont < 20)
            echo ", ";
        else
            echo ".<br>";
        $cont++;
    }
    //Escribimos lo que no pide
    echo "<p><b>El numero mas pequeño es:</b> <font color='blue'>".$numeros[0]."</font></p>";
    echo "<p><b>El numero mas grande es:</b> <font color='green'>".$numeros[count($numeros)-1]."</font></p>";
    echo "<p><b>La suma de todos los numeros:</b> ".array_sum($numeros)."</p>";
    echo "<p><b>La media de todos los numeros:</b> ".array_sum($numeros)/count($numeros)."</p>";
	?>
</body>
</html>