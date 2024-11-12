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
        <a href="../index.html">  <h1>BAUHAUS</h1> </a>
        <nav>
            <ul>
            <li><a href="arquitectura.html">Arquitectura</a></li>
        <li><a href="industrial.html">Industrial</a></li>
        <li><a href="mobiliario.html">Mobiliario</a></li>
        <li><a href="galeria.html">Galeria</a></li>
        <li><a href="inicio de sesión.php">Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="form-container">
            <h2>Iniciar Sesión</h2>
            <form action="inicio de sesión.html" method="post"> 
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
    </main>

    <footer>
        <p>Contacto: info@bauhaus.com | Teléfono: +54 123456789</p>
        <p>Dirección: Calle de la Creatividad, 123, Weimar, Alemania</p>
        <p>&copy; 2024 Bauhaus Diseño. </p>
    </footer>
</body>
</html>