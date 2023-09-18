


<?php

header('Content-Type: text/html; charset=utf-8');

// Establecer la conexión a la base de datos (asegúrate de reemplazar estos valores con tus credenciales)
$servername = "127.0.0.1";
$username = "root";
$password = " ";
$database = "prod_promocion";
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$productos = $_POST["productos_elegibles"];
$descuento = $_POST["descuento"];

// Insertar los datos en la tabla "promociones"
$sql = "INSERT INTO promociones (nombre, descripcion, productos_elegibles, descuento) VALUES ('$nombre', '$descripcion', '$productos_elegibles', '$descuento')";

if ($conn->query($sql) === TRUE) {
    echo "Promoción guardada con éxito.";
} else {
    echo "Error al guardar la promoción: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
