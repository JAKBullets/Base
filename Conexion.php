<?php
$conexion = mysqli_connect("localhost", "root", "12345678") or die("Error de conexión: " . mysqli_connect_error());
mysqli_select_db($conexion, "upvm") or die("Error de base de datos: " . mysqli_error($conexion));

?>