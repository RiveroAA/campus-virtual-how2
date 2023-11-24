<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!-- Título de la página -->
          <title>How2 - Iniciar sesión</title> 
     </head>
     <!-- Inclusión de un archivo PHP para la barra de navegación -->
     <?php include("../includes/navbar.php");?> 
     <body>
          <!-- Párrafo con clase "btn" -->
          <p class="btn">ACA VA EL LOGIN MEZCLANDO PHP Y HTML</p> 
     </body>
</html>
<?php
// Inclusión del archivo PHP para conexión a la base de datos
include("../php/libraries/connect.php"); 
// Creación de una instancia de conexión
$connect = new Conexion(); 
// Consulta SQL para obtener datos de la tabla 'cursos'
$sql = "SELECT * FROM cursos";
// Verificación de la ejecución de la consulta
if(mysqli_query($connect->connectBd(), $sql)){ 
     // Mensaje si la consulta se ejecutó correctamente
     echo "Funca piola"; 
} else {
     // Mensaje si hay algún error en la conexión o consulta
     echo "no funca" . mysqli_connect_error(); 
}
?>
