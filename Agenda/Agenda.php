<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Agenda</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
    <fieldset id="fieldset">
        <legend>Añadir contacto</legend>
        <form action="" method="post">
		    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $_POST['nombre'] ?>">
            <input type="text" name="email"  placeholder="Email" value="<?php echo $_POST['email'] ?>">
		    <input type="submit" name="submit" value="Añadir a agenda">
	    </form>
    </fieldset>
    <fieldset id="fieldset">
        <legend>Contactos</legend>
        <?php    
        if (isset($_POST['submit'])) {
            añadirContacto($_POST['nombre'], $_POST['email']);
        }

        function añadirContacto($nombre, $email) {
            if (empty($nombre)) {
                echo "<div id='error'>";
                echo "<p><b>No puedes dejar el nombre vacio</b></p>";
                echo "</div>";
            }
            else if (isset($nombre) and empty($email)) {
                unset($_SESSION['Contactos'][$nombre]);
                mostrar();
            }
            elseif (valEmail($email)) {
                echo "<div id='error'>";
                echo "<p><b>El correo electronico no es valido</b></p>";
                echo "</div>";
            }
            else {
                $_SESSION['Contactos'][$nombre] = $email;
                mostrar();
            }
        }

        function mostrar() {
            foreach ($_SESSION['Contactos'] as $nombre => $email){
                echo "<div class='contacto'>";
                echo "<h2>$nombre</h2>";
                echo "<p>$email</p>";
                echo "</div>";
            }
        }

        function valEmail($email) {
            if (strpos($email, "@") !== false and strpos($email, ".") !== false)
                return false;
            else
                return true;
        }
    ?>
    </fieldset>
</body>
</html>