<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/6.Potencias</title>
</head>
<body>
    <p>Dada una potencia y una cantidad mostrar los números, su
    potencia, mientras la potencia sea menor que la cantidad.</p>
	<?php
    $potencia = rand(2,10);
    $cantidad = rand(100,1000);
    $base = 1;
    echo "<p><b>La potencia es:</b> $potencia <br>
    <b>La cantidad es:</b> $cantidad <br><br>";
    do{
        $respuesta = pow($base, $potencia);
        if ($respuesta < $cantidad)
            echo $base." - ".$respuesta."<br>";
        $base++;
    }
    while ($respuesta < $cantidad)
	?>
</body>
</html>