<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/6.Parque</title>
</head>
<body>
	<?php
    function numero(){
        $n1 = rand(0,10);
        return $n1;
    }
    function suma ($n1,$n2){
        return $n1 + $n2;
    }
    function resta ($n1,$n2){
        return $n1 - $n2;
    }
    function mult ($n1,$n2){
        return $n1 * $n2;
    }
    function div ($n1,$n2){
        return $n1 / $n2;
    }   
    $n1 = numero();
    $n2 = numero();
    echo "El primero numero es: $n1 <br>
          El segundo numero es: $n2 "
	?>
</body>
</html>