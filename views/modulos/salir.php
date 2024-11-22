<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión completamente
session_destroy();

// Redirigir a la página de inicio de sesión o principal
header("Location: login.php"); // Cambia "login.php" por la página a la que deseas redirigir
exit();
?>
