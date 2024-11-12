<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuario</title>
    <link rel="stylesheet" href="../css/inicio_de_sesión">
</head>
<body>
    <h2>Usuario</h2>
    <form action="registro.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required>
        
        <label for="edad">Edad:</label>
        <input type="number" name="edad" required>
        
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        
        <button type="submit" name="register">Registrarse</button>
    </form>

    <?php
    if (isset($_POST['register'])) {
        $conexion = new mysqli("localhost", "root", "", "usuario");
       
        if ($conexion->connect_error) {
            die("Error en la conexión: " . $conexion->connect_error);
        }

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nombre, apellido, edad, direccion, email, password) VALUES ('$nombre', '$apellido', '$edad', '$direccion', '$email', '$password')";

        if ($conexion->query($sql) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error: " . $conexion->error;
        }

        $conexion->close();
    }
    ?>
</body>
</html>
