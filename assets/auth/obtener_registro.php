<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tarea_db";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si la conexión tuvo éxito
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Consulta para verificar el correo y contraseña en la tabla de alumnos
    $alumno_query = "SELECT * FROM alumnos WHERE correo='$correo' AND contrasena='$contrasena'";
    $alumno_result = $conn->query($alumno_query);

    // Consulta para verificar el correo y contraseña en la tabla de profesores
    $profesor_query = "SELECT * FROM profesores WHERE correo='$correo' AND contrasena='$contrasena'";
    $profesor_result = $conn->query($profesor_query);

    // Verificar si el correo y contraseña corresponden a un alumno
    if ($alumno_result->num_rows > 0) {
        // Redirigir a clases.html si es un alumno
        header("Location: ..\..\clases.php");
        exit(); // Finalizar la ejecución del script
    } elseif ($profesor_result->num_rows > 0) {
        // Redirigir a esqueleto.html si es un profesor
        header("Location: ..\..\clase_profesor.php");;
        exit(); // Finalizar la ejecución del script
    } else {
        echo "Correo o contraseña incorrectos"; // Mensaje si no se encuentra en ninguna tabla
    }

    // Cerrar conexión
    $conn->close();
}
?>
