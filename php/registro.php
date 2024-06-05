<?php
require 'conexion.php';
$pdo=connection();
// Obtener datos del formulario de registro
$username = $_POST['control'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$fecha_registro = date('Y-m-d H:i:s');

// Buscar el usuario en la base de datos
$Query = "SELECT * FROM usuarios WHERE username ='".$username."'";
$Result = $pdo->query($Query);

if ($Result === false) {
    die("Error al ejecutar la consulta: " . $pdo->error);
}
// Verificar si se encontró el usuario
if ($Result->rowCount() == 0) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insertar usuario en la base de datos
    $sql = "INSERT INTO usuarios (username, password, nombre, fecha_registro) VALUES (:username, :password, :nombre, :fecha_registro)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue('username', $username);
    $stmt->bindValue('password', $hashedPassword);
    $stmt->bindValue('nombre', $nombre);
    $stmt->bindValue('fecha_registro', $fecha_registro);
    
    if ($stmt->execute()) {
        header("Location: ../index.html");
        echo "Usuario registrado correctamente.";
    } else {
        echo "Error al registrar usuario: " . $stmt->error;
    }
}else{
    
    ?>
    <p>Usuario ya existente</p>
    <br> <button><a href="register.php">Volver</a></button>
    <?php
    exit;
}



 
?>
