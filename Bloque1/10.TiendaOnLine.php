<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/9.Comision</title>
</head>
<body>
    <p>Disponemos de los siguientes datos:<br>
    - El importe de la cesta de la compra $total_compra, número
    con dos decimales.<br>
    - La variable $tipo_compra puede contener 'mascotas' o 'ropa'.<br>
    <br>
    Escribe el código necesario para implementar:<br>
    Si la compra del cliente es inferior a 19 euros:<br>
    ❖ si los productos son de mascotas se mostrará un mensaje:
      "No se puede realizar el envío".<br>
    ❖ si los productos son de ropa se le mostrará el siguiente
      mensaje: "Los gastos de envío son 9 euros".<br>
    Si la compra tiene un importe entre 19 y 40 euros se le
    indicará el mensaje: "Los gastos de envío son 9 euros".
    Si la compra supera los 80 euros deberemos indicar un mensaje
    de que los portes de envío son gratis.
    Mostrar el precio final de la compra teniendo en cuenta que
    hay que añadir un 10% de iva si se trata de mascotas y un 21%
    si se trata de ropa.</p><br>
    <?php
    $total_compra = rand(1*100, 100*100) / 100;
    $Ntipo_compra = rand(1,2);
    if($Ntipo_compra == 1)
        $tipo_compra = "mascotas";
    else
        $tipo_compra = "ropa";
    $pFinal = 0;
    echo "<p><b>El total de compra es: </b>".$total_compra."<br>
            <b>El tipo de compra es: </b>".$tipo_compra."</p>";
    if ($total_compra <= 19){
        if ($tipo_compra == "mascotas")
            echo "No se puede realizar el pedido";
        else {
            echo "Los gastos de envio son 9 euros<br>";
            $pFinal = ($total_compra * 1.21) + 9;
            echo "El precio final es: ".$pFinal;
        }
    }
    elseif ($total_compra > 19 and $total_compra <= 40) {
        echo "Los gastos de envio son 9 euros<br>";
        if ($tipo_compra == "mascotas") {
            $pFinal = ($total_compra * 1.10) + 9;
            echo "El precio final es: ".$pFinal;
        }
        else {
            $pFinal = ($total_compra * 1.21) + 9;
            echo "El precio final es: ".$pFinal;
        }
    }
    elseif ($total_compra > 80) {
        echo "Los portes de envio son gratis<br>";
        if ($tipo_compra == "mascotas") {
            $pFinal = $total_compra * 1.10;
            echo "El precio final es: ".$pFinal;
        }
        else {
            $pFinal = $total_compra * 1.21;
            echo "El precio final es: ".$pFinal;
        }
    }
	?>
</body>
</html>