<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Agenda</title>
</head>
<body>
    <h2>Agenda</h2>
    <form action="" method="post">
		<input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="email"  placeholder="Email"><br>
		<input type="submit" value="Añadir a agenda">
	</form>
    
	<?php
    /*
     *Author: Adrián Gómez
     */
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contactos = [];
    function añadirContacto($nombre, $email, $contactos) {
        array_push($contactos[], $nombre);
        array_push($contactos[$nombre], $email);
    }

    function mostrarInformacion(){

    }
    añadirContacto($nombre, $email, $contactos);
	?>
</body>
</html>