<?php

session_start();

$_SESSION['nombre']=$_POST['Nombre'];
echo "variable:" . $_SESSION['nombre'];
echo "<a href='principal.php'>Volver</a>";
?>
