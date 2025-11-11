<?php
include("conexion.php");

// Verificar el envío de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Verificar si el usuario ya existe
    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    // Si ya existe un usuario con el mismo nombre
    if ($result->num_rows > 0) {
        // Redirigir al registro con un mensaje de error
        header("Location: ../registro.php?error=usuario_existe");
        exit;
    }

    // Si el usuario no existe, proceder con el registro
    $sql = "INSERT INTO usuarios (usuario, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $usuario, $email, $password);

    if ($stmt->execute()) {
        echo "Datos Insertados Correctamente";
    } else {
        echo "Error al insertar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
