
<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "sc71";

// Crear conexion

$conn = new mysqli($servername, $username, $password, $bd);

// Checar conexion

if ($conn->connect_error) {
    die("Conexion". $conn->connect_error);
}

echo "Conexion exitosa";

?>
