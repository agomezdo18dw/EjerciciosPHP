<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Apliacion</title>
</head>
<body>
    <h2>Codigo que dado un numero te calcule el binario</h2>
    <form action="" method="get">
		<input type="number" name="decimal"><br>
		<input type="submit" value="Calcular binario">
	</form>
	<?php
    //Funcion que calcula el binario
    function binario($decimal){
        $binario = decbin($decimal);
        return $binario;
    }
    //Metemos en las variables los valores dados
    $decimal = $_GET['decimal'];
    $binario = binario($_GET['decimal']);
    //Enseñamos el resultado si hemos introducido algo en el input
    if (isset($decimal))
        echo "<h4>El numero <font style='color: red'>$decimal</font> en binario es <font style='color: blue'>$binario</font></h4>"
	?>
</body>
</html>