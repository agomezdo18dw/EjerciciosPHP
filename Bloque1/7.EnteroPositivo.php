<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/6.Parque</title>
</head>
<body>
    <p>Implementar la siguiente operación, aplicable a cualquier
    número entero positivo:<br>
    - Si el número es par, se divide entre 2.<br>
    - Si el número es impar, se multiplica por 3 y se suma 1.<br>
Al final siempre obtenemos uno.</p>
    <?php
    $primerN = rand(10, 20);
    echo "<p><b>Primer numero:</b> $potencia</p><br>";
    do{
        if($primerN == 1){
            break;
        } 
        else {
            echo $primerN.", ";
            if (esPar($primerN))
                $primerN = $primerN / 2;
            else
                $primerN = ($primerN * 3) + 1;
        }
    }
    while($primerN >= 1);
    echo "1.";

    function esPar($numero){
        $par = false;
        if($numero % 2 == 0)
            $par = true;
        else
            $par = false;
        return $par;
    }
	?>
</body>
</html>