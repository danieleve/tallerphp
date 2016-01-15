<?php
session_start();
?>

<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset=utf-8">
	    <link rel="stylesheet" type="text/css" href="index_files/main.html">
	    <title>Formulario</title>
    </head>
    <body>
    
    <?php
    if (isset($_SESSION['nombre'])){
      echo "<p> Hola Usuario:(" . $_SESSION['nombre']. ")[<a href='salir.php'> Salir</a>]</p>";
    }
  else{
    ?> 
	    <form action="datos.php" method="post">
	      <fieldset>
	        <label>Usuario</label>
	        <input type="text" name="Nombre"/></br>
	        <label>Clave</label>
          <input type="text" name="Apellido"/></br>
          <button type="submit">Enviar</button>
        </fieldset>
      </form>
      <?php } ?>
    </body>  
    
  </html>
