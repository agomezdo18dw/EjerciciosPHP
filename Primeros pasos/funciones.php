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
    function operacion(){
        $n = random_int(1,4);
        if ($n == 1)
            $operacion = "suma";
        elseif ($n == 2)
            $operacion = "resta";
        elseif ($n == 3)
            $operacion = "mult";
        else
            $operacion = "div";
        return $operacion;
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
    function calculadora ($operacion, $n1, $n2){
        if ($operacion == "suma")
            $res = suma($n1, $n2);
        elseif ($operacion == "resta")
            $res = resta($n1, $n2);
        elseif ($operacion == "mult")
            $res = mult($n1, $n2);
        else
            $res = div($n1, $n2);
        return $res;
    }
    $n1 = numero();
    $n2 = numero();
    $operacion = operacion();
    echo "<p><b>El primero numero es:</b> ".$n1."<br>
          <b>El segundo numero es:</b> ".$n2."<br>
          <b>La operacion es:</b> ".$operacion."</p>";
    echo "<p>La respuesta es: ".calculadora($operacion, $n1, $n2)."</p>";
	?>
</body>
</html>