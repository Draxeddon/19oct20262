<?php
// Definir variables en PHP
$nombre_sitio = "Mi Sitio Web";
$anio_actual = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $nombre_sitio; ?></title>
</head>
<body>
    <h1>¡Bienvenido a <?php echo $nombre_sitio; ?>!</h1>
    <p>La fecha de hoy es: <?php echo date("d/m/Y"); ?></p>
    <footer>
        <p>&copy; <?php echo $anio_actual; ?> Todos los derechos reservados.</p>
    </footer>
</body>
</html>