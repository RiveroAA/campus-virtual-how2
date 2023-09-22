<!DOCTYPE html>
<html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>How2 - Iniciar sesión</title>
     </head>
<?php include("../includes/navbar.php");?>
     <body>
          <p class="btn">ACA VA EL LOGIN MEZCLANDO PHP Y HTML</p>
     </body>

</html>
<?php
include("../php/libraries/connect.php");
$connect = new Conexion();
$sql = "SELECT * FROM cursos";
if(mysqli_query($connect->connectBd(), $sql)){
     echo "Funca piola";
} else {
     echo "no funca" . mysqli_connect_error();
}
?>