<?php
// Incluir la conexión a la base de datos
require_once '../config/database.php';

// Obtener el término de búsqueda desde el formulario
$search = $_GET['search'] ?? '';

// Preparar la consulta SQL
if ($search) {
    // Si el campo de búsqueda tiene texto, usar la cláusula WHERE con LIKE
    $sql = "SELECT * FROM artistas WHERE artista LIKE :search";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':search', '%' . $search . '%');
} else {
    // Si el campo de búsqueda está vacío, seleccionar todos los artistas
    $sql = "SELECT * FROM artistas";
    $stmt = $pdo->prepare($sql);
}

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados de la consulta
$artistas_filtrados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/arqui.ind.mob.css">
    <title>Industrial</title>
</head>
<body>
    <header>
        <h1><a href="../index.html" style="color: white; text-decoration: none;">BAUHAUS</a></h1>
        <nav>
            <ul>
                <li><a href="../subpaginas/arquitectura.html">Arquitectura</a></li>
                <li><a href="../subpaginas/industrial.php">Industrial</a></li>
                <li><a href="../subpaginas/mobiliario.html">Mobiliario</a></li>
                <li><a href="../subpaginas/galeria.html">Galeria</a></li>
                <li><a href="../subpaginas/inicio_de_sesión.php">Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <main id="industrial">
        <div class="contenido">
            <div class="imagen-principal">
                <img src="../imagenes/img industrial.png" alt="Imagen industrial">
            </div>
            <div class="texto-informativo">
                <h2>Diseño Industrial</h2>
                <p>El diseño industrial en la Bauhaus fue un campo pionero que buscó integrar el arte con la producción en masa, sentando las bases para el diseño industrial moderno. En la Bauhaus, el diseño de objetos cotidianos pasó de ser un proceso artesanal a uno racionalizado, donde la estética, la funcionalidad y la tecnología se combinaban para crear productos que pudieran ser producidos en serie, accesibles y útiles para la sociedad.
                    Bajo la dirección de maestros como László Moholy-Nagy y Marcel Breuer, la Bauhaus exploró nuevas formas y materiales industriales, como el acero, el vidrio, y el plástico, para desarrollar objetos innovadores que respondieran a las necesidades de la vida moderna. El objetivo era democratizar el diseño, hacer productos más asequibles y prácticos, y romper con el elitismo de los objetos decorativos de la época.
                    El diseño industrial en la Bauhaus no solo cambió la manera en que se creaban los objetos, sino también la forma en que se pensaba en ellos. Desde lámparas hasta electrodomésticos, los diseñadores de la Bauhaus influyeron en la vida cotidiana de millones de personas, demostrando que la belleza y la utilidad no tienen por qué estar en desacuerdo.</p>
            </div>
        </div>
        <section class="influencers">
            <!-- Buscador de artistas -->
            <form method="GET" action="">
                <input type="text" name="search" placeholder="Buscar artista" />
                <button type="submit">Buscar</button>
            </form>
            <!--  == Influyentes ==-->
            <section class="influencers">
            <h2>Principales Influyentes</h2>
                <div class="influencer-container">
                    <?php if (empty($artistas_filtrados)): ?>
                        <p>No se encontraron resultados para "<?php echo htmlspecialchars($search); ?>"</p>
                    <?php else: ?>
                        <?php foreach ($artistas_filtrados as $artista): ?>
                            <div class="influencer-card">
                                <img src="<?php echo $artista['imagen']; ?>" alt="<?php echo htmlspecialchars($artista['nombre']); ?>">
                                <h3><?php echo htmlspecialchars($artista['artista']); ?></h3>
                                <p><?php echo htmlspecialchars($artista['descripcion']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </section>

        <!--  -->
        <!-- <section class="influencers"> -->
        <h2>Productos</h2>
        <div class="influencer-container">
            <div class="influencer-card">
                <img src="../imagenes/set de mesa.jpg" alt="Set de mesa">
                <h3>Set de Mesa</h3>
                <p>Inventado por Marianne Brand, se caracterizan por su diseño minimalista y el uso de materiales como el metal y el vidrio.</p>
            </div>
            <div class="influencer-card">
                <img src="../imagenes/lampara wagenfeld.jpg" alt="Lámpara Wagenfeld">
                <h3>Lámpara Wagenfeld</h3>
                <p>Diseñada por Wilhelm Wagenfeld, se caracteriza por su diseño simple y elegante, utilizando materiales como el vidrio y el metal.</p>
            </div>
            <div class="influencer-card">
                <img src="../imagenes/silla cesca.jpg" alt="Silla Cesca">
                <h3>Silla Cesca</h3>
                <p>Creada por Marcel Breuer en 1928, esta silla combina acero tubular con un asiento de mimbre o tapizado, fusionando confort y estética moderna.</p>
            </div>
        </div>
    </section>
    </main>
    <footer>
        <div class="footer-content">
            <div class="contact-info">
                <p>Contacto: <a href="mailto:info@bauhaus.com">info@bauhaus.com</a> | Teléfono: +54 123456789</p>
                <p>Dirección: Calle de la Creatividad, 123, Weimar, Alemania</p>
            </div>
            <div class="social-media">
                <a href="https://www.instagram.com/bauhausdesign_studio/" target="_blank">
                    <img src="../logos/instagram.png" alt="Instagram">
                </a>
                <a href="https://www.facebook.com/bauhausthebandofficial/" target="_blank">
                    <img src="../logos/facebook.png" alt="Facebook">
                </a>
                <a href="https://twitter.com/bauhausmovement" target="_blank">
                    <img src="../logos/twitter.png" alt="Twitter">
                </a>
            </div>
            <p>&copy; 2024 Bauhaus Diseño.</p>
        </div>
    </footer>
</body>
</html>