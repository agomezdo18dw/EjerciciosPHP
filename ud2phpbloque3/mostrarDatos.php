<!DOCTYPE html>
<html>
<head>
  <title>UD2 - Suscripción boletín</title>
</head>
<body>
  <h1>Muestra del boletín.</h1>
  <p>EJERCICIO: Implementa la página mostrardatos.php donde aparecerán los datos introducidos por el usuario.</p>
  <?php 
  echo '<b>Nombre: </b>'.$_POST['nombre'].'<br>';
  echo '<b>Apellidos: </b>'.$_POST['apellidos'].'<br>';
  echo '<b>Email: </b>'.$_POST['email'].'<br>';
  echo '<b>Cumpleaños: </b>'.$_POST['bdaytime'].'<br>';
  //echo '<b>Foto: </b>'.$_FILES['myFile','tmp_name']."<br>";
  echo '<b>Ciclo: </b>'.$_POST['ciclo'].'<br>';
  echo '<b>Lenguaje interesado: </b><br>';
  echo lista();
  echo '<b>Dia de la semana: </b>'.$_POST['dia'].'<br>';
  echo '<b>Color favorito: </b>'.$_POST['color'].'<br>';
  echo '<b>Comentario: </b>'.$_POST['comentario'].'<br>'; 
  
  function lista(){
    echo "<ul>";
    echo isset($_POST['python']) ? "<li>Python</li>" : "";
    echo isset($_POST['java']) ? "<li>Java</li>" : "";
    echo isset($_POST['php']) ? "<li>PHP</li>" : "";
    echo isset($_POST['js']) ? "<li>JavaScript</li>" : "";
    echo isset($_POST['ruby']) ? "<li>Ruby</li>" : "";
    echo isset($_POST['c']) ? "<li>C#</li>" : "";
    echo "</ul>";
  }
  ?>
</body>
</html>
