<?php
// Verificar Mensaje De Error
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container-login">
        <div class="toggle-buttons">
            <button id="inicioToggle" class="active">Inicio de Sesión</button>
            <button id="registroToggle">Registrarse</button>
        </div>

        <!-- Formulario de inicio -->
        <form action="php/login.php" method="POST" id="inicioFormulario" class="formulario active">
            <h2>Iniciar Sesión</h2>
            <div class="form-group">
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div><br>
            <div class="form-group">
                <input type="password" name="password" placeholder="Contraseña" required>
            </div><br>
            <button type="submit" class="btn-primary">Iniciar Sesión</button>
        </form>

        <!-- Formulario de registro -->
        <form id="registroFormulario" action="php/signup.php" method="post" class="formulario" autocomplete="off">
            <h2>Registrarse</h2>
            <div class="form-group">
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div><br>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div><br>
            <div class="form-group">
                <input type="password" name="password" placeholder="Contraseña" required>
            </div><br>
            <button type="submit" class="btn-primary">Registrarse</button>
        </form>
    </div>

    <script src="js/login.js"></script>


        <?php
    // Comprobar si hay un mensaje de error en la URL
    if (isset($_GET['error'])) {
        $error = $_GET['error'];

        // Mostrar el mensaje de error 
        if ($error === 'contraseña_incorrecta') {
            echo "<p style='color:red;'>Contraseña incorrecta. Por favor, inténtalo de nuevo.</p>";
        } elseif ($error === 'usuario_no_encontrado') {
            echo "<p style='color:red;'>Usuario no encontrado. Por favor, verifica tu nombre de usuario.</p>";
        } elseif ($error === 'usuario_existe') {
            echo "<p style='color:red;'>Este nombre de usuario ya esta ocupado, escoge otro.</p>";
        }
    }
    ?>
</body>
</html>
