<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/5.Parque</title>
</head>
<body>
    <p>Queremos controlar la entrada a una atracción del parque. Se
    pueden subir los mayores de 10 años o los que midan más de 120
    cm. Si el menor está ‘acompañado’ se le permite subir a la
    atracción si la edad es mayor de 6 años, no importa la altura.</p>
	<?php
    $edad = rand(1,100);
    $altura = rand(100,200);
    $acompañado = rand(0,1);
    if ($acompañado == 1)
        $acompañado = "Acompañado";
    else
        $acompañado = "No acompañado";
    echo "<p><b>La edad de la persona es:</b> $edad <br>
    <b>La altura de la persona es:</b> $altura <br>
    <b>La persona esta acompañada:</b> $acompañado</p>";

    if ($edad >= 10 or $altura >= 120)
        echo "Puede entrar";
    elseif ($edad >= 6 and $acompañado == "Acompañado")
        echo "Puede entrar ya que va acompañado";
    else
        echo "No puede entrar";
	?>
</body>
</html>