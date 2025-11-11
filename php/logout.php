<?php
session_start();

$_SESSION = []; // Vaciar datos de sesión

session_unset();
// Eliminar la cookie de sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();


// Redirigir al inicio
header("Location: ../index.php");
exit;
?>