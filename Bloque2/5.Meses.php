<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/5.Meses</title>
    <style>
    </style>
</head>
<body>
    <p>Crea un un array con los meses del año y para cada mes el número de días que tendrá éste año.</p>
	<p>¿De que año quieres saber los meses?</p>
	<form action="5.Meses.php" method="post">
 		<input type="number" id="año" name="año" placeholders="Inserta un año"/>
 		<input type="submit" value="Enviar"/>
	</form>
	<br>
	<?php
	//Cogemos el año
	$año = $_POST['año'];
	//Funcion que calcula los dias de los meses del año dicho anteriormente
    function dias($año){
		//Decimos que año es
		echo "Meses del año $año: <br>";
		//Creamos array con los meses para posteriormente escribirlos
		$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
		//Creamos bucle para que coja los dias de cada mes y los escribimos
		while ($meses.length()){
			$diasDelMes = cal_days_in_month(CAL_GREGORIAN, $mes, $año);
			echo "En el mes de ".$meses[$mes-1]." hubo $diasDelMes dias.<br>";
			$mes++;
		}
			
	}
	//Llamamos a la funcion
	dias($año);
	?>
</body>
</html>