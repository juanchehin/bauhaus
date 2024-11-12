<?php
// Iniciar la sesión
session_start();

// Verificar si ya está autenticado, si es así, redirigir a admin.php
if (isset($_SESSION['user_id'])) {
    header("Location: admin.php");
    exit();
}

// Incluir el archivo de configuración de la base de datos
require_once '../config/database.php';

// Comprobar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $_SERVER['REQUEST_METHOD'];

    // Obtener los datos del formulario
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Consultar la base de datos para verificar el usuario
    $sql = "SELECT * FROM usuarios WHERE usuario = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si el usuario existe y la contraseña es correcta
    if ($user && md5($password) === $user['password']) {
        // Si la autenticación es exitosa, establecer una sesión y redirigir a admin.php
        $_SESSION['user_id'] = $user['id_usuario']; // Guardar el ID del usuario en la sesión
        header("Location: admin.php");
        exit();
    } else {
        // Si las credenciales no son válidas, redirigir al formulario de inicio de sesión con un mensaje de error
        header("Location: inicio_de_sesion.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/inicio de sesión.css"> 
    <title>Inicio de Sesión</title>
</head>
<body>
    <header>
        <a href="../index.html" style="text-decoration: none;">  <h1>BAUHAUS</h1> </a>
        <nav>
            <ul>
            <li><a href="arquitectura.html">Arquitectura</a></li>
            <li><a href="industrial.html">Industrial</a></li>
            <li><a href="mobiliario.html">Mobiliario</a></li>
            <li><a href="galeria.html">Galeria</a></li>
            <li><a href="inicio_de_sesion.php">Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <!--  -->
        <div class="form-container">
            <h2>Iniciar Sesión</h2>
            <form action="inicio_de_sesion.php" method="post"> 
                <div class="form-group">
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Iniciar Sesión</button>
            </form>
            <p>
                <a href="#" style="text-decoration: underline; color: #fff;">¿Olvidaste tu contraseña?</a>
            </p>
            <p>
                <a href="registro.html" style="text-decoration: underline; color: #fff;">¿No tienes cuenta? Regístrate aquí</a>
            </p>
        </div>
    <!--  -->
    </main>

    <footer>
        <p>Contacto: info@bauhaus.com | Teléfono: +54 123456789</p>
        <p>Dirección: Calle de la Creatividad, 123, Weimar, Alemania</p>
        <p>&copy; 2024 Bauhaus Diseño. </p>
    </footer>
</body>
</html>