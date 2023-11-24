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
    // Otros campos...

    // Verificar qué tipo de usuario es
    if (isset($_POST["alumno"])) {
        // Si es alumno, insertar en la tabla de alumnos
        $sql = "INSERT INTO alumnos (correo, contrasena) VALUES ('$correo', '$contrasena')";
    } elseif (isset($_POST["docente"])) {
        // Si es profesor, insertar en la tabla de profesores
        $sql = "INSERT INTO profesores (correo, contrasena) VALUES ('$correo', '$contrasena')";
    }

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        // Registro exitoso, redirigir a la página de login
        echo '<script>alert("Registro exitoso"); window.location.href = "login.html";</script>';
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
}
?>

