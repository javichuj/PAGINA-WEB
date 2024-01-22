<?php
// Variables
$hostDB = '127.0.0.1';
$nombreDB = 'Local instance MySQL81';
$usuarioDB = 'root';
$contraseñaDB = 'Minguell25022001';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$pdo = new PDO($hostPDO, $usuarioDB, $contraseñaDB);
// Conexión a la base de datos 
$hostDB = '127.0.0.1';
$nombreDB = 'Local instance MySQL81';
$usuarioDB = 'root';
$contraseñaDB = 'Minguell25022001';

$conexion = new mypdo('127.0.0.1', 'Local instance MySQL81', 'root', 'Minguell25022001');

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$apellidos = $_POST['apellidos'];

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (nombre, usuario, apellidos) VALUES ('$nombre', '$usuario', '$apellidos')";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error en el registro: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
