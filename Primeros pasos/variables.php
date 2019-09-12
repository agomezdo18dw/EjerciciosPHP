<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP</title>
</head>
<body>
	<?php
	$var1 = 100;
	$var2 = &$var1;
	$var3 = $var1;
	echo "$var2<br>";
	$var2 = 300;
	echo "$var1<br>";
	$var3 = 400;
	echo "$var1<br>";
	?>
</body>
</html>
