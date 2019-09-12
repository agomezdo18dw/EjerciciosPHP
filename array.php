<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP</title>
</head>
<body>
	<?php
    $a[0] = 0;
    $a[1] = "uno";
    $a['tres'] = 3;
    $a[] = 7;

    foreach ($a as $valor){
        echo "$valor, ";
    }
	
	?>
</body>
</html>