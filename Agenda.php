<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Agenda</title>
    <style>
        body {
            margin: 0 auto;
            width: max-content;
        }
        #fieldset {
            width: 700px;
            margin-top: 3%;
            text-align: center;
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
        }
        .contacto {
            width: 200px;
            border: 1px solid black;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
            background-color: #c2c2c2;
        }
    </style>
</head>
<body>
    <fieldset id="fieldset">
        <legend>Añadir contacto</legend>
        <form action="" method="post">
		    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $_POST['nombre'] ?>">
            <input type="text" name="email"  placeholder="Email" value="<?php echo $_POST['email'] ?>">
		    <input type="submit" value="Añadir a agenda">
	    </form>
    </fieldset>
    <fieldset id="fieldset">
        <legend>Contactos</legend>
        <?php
    /*
     *Author: Adrián Gómez
     */
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contactos = [Adrian => "agomezdo18dw",
                  Aitor => "aortizde18dw"];
    
    
    foreach ($contactos as $nombre => $email) {
        echo "<div class='contacto'>";
        echo "<h2>$nombre</h2>";
        echo "<p>$email</p>";
        echo "</div>";
    }
    añadirContacto($nombre, $email, $contactos);

    function añadirContacto($nombre, $email, $contactos) {
        $contactos[$nombre] = $email;
    }
	?>
    </fieldset>
</body>
</html>