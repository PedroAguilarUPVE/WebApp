<?php

ini_set('session.cookie_lifetime', 0);
ini_set('session.gc_maxlifetime', 0);
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usuario = $_POST["usuario"] ?? '';
    $password = $_POST["password"] ?? '';

    if (empty($usuario) || empty($password)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    //Comparar los datos del usuario con los de la base de datos
    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {
            $_SESSION["usuario"] = $user["usuario"];
            $_SESSION["email"] = $user["email"];

            header("Location: ../index.php?status=ok");
            exit;

        } else {
            // Contraseña incorrecta
            header("Location: ../registro.php?error=contraseña_incorrecta");
            exit;
        }
    } else {
        // Usuario no encontrado
        header("Location: ../registro.php?error=usuario_no_encontrado");
        exit;
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Por favor, envía el formulario correctamente.";
}
?>
