<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarea_db";

// Crear conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los comentarios ordenados por fecha
$sql = "SELECT comentario FROM descripcion ORDER BY fecha_envio DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Construir la lista de comentarios en formato HTML
    $comentariosHTML = "";
    while ($row = $result->fetch_assoc()) {
        $comentariosHTML .= '<div class="border p-2 mb-3"><textarea class="form-control" rows="4" readonly>' . $row['comentario'] . '</textarea></div>';
    }
    echo $comentariosHTML;
} else {
    echo "No hay comentarios.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
