<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio_de_sesion.css"> 
    <title>Inicio de Sesión</title>
</head>
<body>
    <header>
        <a href="index.html">  <h1>BAUHAUS</h1> </a>
        <nav>
            <ul>
                <li><a href="">Arquitectura</a></li>
                <li><a href="secciones/industrial.html">Industrial</a></li>
                <li><a href="secciones/mobiliario.html">Mobiliario</a></li>
                <li><a href="secciones/galeria.html">Galeria</a></li>
                <li><a href="inicio_de_sesion.php">Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="form-container">
            <h2>Iniciar Sesión</h2>
            <form action="inicio_de_sesion.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        
        <button type="submit" name="login">Ingresar</button>
    </form>

    <a href="registro.php">¿No tienes una cuenta? Regístrate</a>

    <?php
    if (isset($_POST['login'])) {
 
        $conexion = new mysqli("localhost", "root", "", "proyecto");

        if ($conexion->connect_error) {
            die("Error en la conexión: " . $conexion->connect_error);
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE email='$email'";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
            if (password_verify($password, $usuario['password'])) {
                echo "Inicio de sesión exitoso";
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "Usuario no encontrado";
        }

        $conexion->close();
    }
    ?>
</body>
</html>

    <footer>
        <p>Contacto: info@bauhaus.com | Teléfono: +54 123456789</p>
        <p>Dirección: Calle de la Creatividad, 123, Weimar, Alemania</p>
        <p>&copy; 2024 Bauhaus Diseño. </p>
    </footer>
</body>
</html>
