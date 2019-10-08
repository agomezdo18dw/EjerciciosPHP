<?php
//Iniciamos una sesion
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/Agenda</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body >
    <fieldset id="fieldset">
        <legend>Añadir contacto</legend>
        <form action="" method="post">
            <!-- Mantenemos los datos escritos en los campos -->
            <label><b>Nombre: </b></label>
		    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $_POST['nombre'] ?>">
            <label><b>Email: </b></label>
            <input type="text" name="email"  placeholder="Email" value="<?php echo $_POST['email'] ?>">
		    <input type="submit" name="submit" value="Añadir a agenda">
	    </form>
    </fieldset>
    <fieldset id="fieldset">
        <legend>Contactos</legend>
        <?php
        //Comprobamos si se ha mandado algo con el boton submit y si es asi llamamos a la funcion contactos   
        if (isset($_POST['submit'])) {
            Contactos($_POST['nombre'], $_POST['email']);
        }
        //Funcion que realiza validaciones y en caso de cumplirse las normas añade un contacto, sino lo elimina o muestra error
        function Contactos($nombre, $email) {
            //Validacion para que no se deje vacio el nombre
            if (empty($nombre)) {
                echo "<div id='error'>";
                echo "<p><b>No puedes dejar el nombre vacio</b></p>";
                echo "</div>";
            }
            //si se añade nombre pero email no elimina el contacto con dicho nombre y luego llama a la funcion mostrar
            else if (isset($nombre) and empty($email)) {
                unset($_SESSION['Contactos'][$nombre]);
                mostrar();
            }
            //Si la validacion del email no pasa muestra que el email es invalido
            elseif (valEmail($email)) {
                echo "<div id='error'>";
                echo "<p><b>El correo electronico no es valido</b></p>";
                echo "</div>";
            }
            //Si no hay nada vacio añade nomber a la agenda, si el nombre ya existe solo actualiza el contacto, y luego llana a la funcion mostrar
            elseif (isset($nombre) and isset($email)){
                $_SESSION['Contactos'][$nombre] = $email;
                mostrar();
            }
            //Mostramos un error inesperado
            else {
                echo "<div id='error'>";
                echo "<p><b>Error inesperado</b></p>";
                echo "</div>";
            }
        }
        //Funcion que muestra los contactos y sus emails
        function mostrar() {
            foreach ($_SESSION['Contactos'] as $nombre => $email){
                echo "<div class='contacto'>";
                echo "<h2>$nombre</h2>";
                echo "<p>$email</p>";
                echo "</div>";
            }
        }
        //Funcion que valida el email si tiene @  y .
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