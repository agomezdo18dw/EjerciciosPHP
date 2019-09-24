<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/9.Comision</title>
</head>
<body>
    <p>Queremos calcular la comisión de un vendedor. La comisión es
    el importe de las ventas más un porcentaje que va en función
    de la cantidad de ventas. Si ha vendido menos de 10.000 € es
    un 5%, entre 10.000 y 20.000 un 8%, entre 20.000 y 40.000 un
    10% y más de 40.000 un 13%.</p>
    <?php
    $ventas = rand(1, 50000);
    $total;
    echo "<b>El importe total de ventas es: </b>".$ventas;

    if ($ventas <= 10000) {
        echo "<p>El porcentaje en este caso es 5%</p>";
        $total = $ventas + ($ventas * 5 / 100);
    }
    elseif ($ventas > 10000 and $ventas <= 20000) {
        echo "<p>El porcentaje en este caso es 8%</p>";
        $total = $ventas + ($ventas * 8 / 100);
    }
    elseif ($ventas > 20000 and $ventas <= 40000) {
        echo "<p>El porcentaje en este caso es 10%</p>";
        $total = $ventas + ($ventas * 10 / 100);
    }
    elseif ($ventas > 40000) {
        echo "<p>El porcentaje en este caso es 13%</p>";
        $total = $ventas + ($ventas * 13 / 100);
    }
    
    echo "<p>El total con comision es: ".$total."</p>";
	?>
</body>
</html>