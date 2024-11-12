<?php
session_start(); // Inicia la sesión

// Verifica si la variable de sesión 'usuario' está establecida
if (!isset($_SESSION['user_id'])) {
    // Si no está iniciada la sesión, redirige al inicio de sesión
    header("Location: inicio_de_sesion.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/arqui.ind.mob.css">
    <title>Pagina admin</title>
</head>
<body>
    <header>
        <h1><a href="../index.html" style="color: white; text-decoration: none;">Pagina accesible a los administradores</a></h1>
        <nav>
            <ul>
                <li><a href="../subpaginas/arquitectura.html">Arquitectura</a></li>
                <li><a href="../subpaginas/industrial.php">Industrial</a></li>
                <li><a href="../subpaginas/mobiliario.html">Mobiliario</a></li>
                <li><a href="../subpaginas/galeria.html">Galeria</a></li>
                <li><a href="../subpaginas/inicio_de_sesion.php">Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>
    <h2>Pagina accesible a los administradores</h2>
    <main>
    </main>
    <footer>
        <p>Contacto: info@bauhaus.com | Teléfono: +54 123456789</p>
        <p>Dirección: Calle de la Creatividad, 123, Weimar, Alemania</p>
        <p>&copy; 2024 Bauhaus Diseño. </p>
    </footer>
</body>
</html>