<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases - How2</title>
</head>
<body>
    <!-- Inclusión del encabezado (navbar) desde un archivo PHP -->
    <?php include("assets/includes/navbar.php") ?>

    <!-- Contenido principal -->
    <div class="container mt-5">
        <h1>Mis Clases</h1>
        <!-- Primer elemento de tarjeta (card) -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Clase de Modelos y Sitemas</h5>
                <p class="card-text">Breve Descripcion.</p>
                <a href="tablon_alumno.php" class="btn btn-primary">Ir a la Clase</a>
            </div>
        </div>
        <!-- Segundo elemento de tarjeta (card) -->
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Clase de Programacion</h5>
                <p class="card-text">Breve Descripcion.</p>
                <a href="tablon_alumno.php" class="btn btn-primary">Ir a la Clase</a>
            </div>
        </div>
    </div>
</body>
</html>
