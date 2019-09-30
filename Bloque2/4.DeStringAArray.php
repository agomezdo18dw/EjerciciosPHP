<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Bloque2/4.DeStringAArray</title>
    <style>
    </style>
</head>
<body>
    <p>Dado un string formado por 5 palabras cualesquiera (por ejemplo $str = "manzana pera limón sandía melón"),
    transformala en un array asociativo que tenga como índice la palabra y como valor la longitud de la misma.</p>
	<?php
    //Creamos el string
    $frutasStr = "manzana pera limon sandia melon";
    //Mostramos el string
    echo "<b>El string es: </b>".$frutasStr."<br><br>";
    //Metemos cada palabra en un valor del array
    $frutasArr = explode(" ",$frutasStr);
    //Mostramos el array
    echo "<b>El valor del array es:</b><br>";
    $cont = 0;
    foreach ($frutasArr as $valor){
        echo "$cont - $valor<br>";
        $cont++;
    }
	?>
</body>
</html>