<?php
require 'conexion.php';
$conn = connection();

session_start(); // Inicia la sesión
header('Content-Type: text/html; charset=UTF-8');

// Verificar que los datos del formulario están presentes
if (isset($_POST['control']) && isset($_POST['password'])) {
    $username = $_POST['control']; 
    $password = $_POST['password'];

    // Preparar la consulta para evitar inyecciones SQL
    $query = $conn->prepare("SELECT * FROM usuarios WHERE username = :control");
    $query->bindParam(':control', $username);
    $query->execute();

    // Verificar si se encontró el usuario
    if ($query->rowCount() > 0) {
        $row = $query->fetch(PDO::FETCH_ASSOC); // Obtener la fila de resultados
        // Verificar la contraseña
        if (password_verify($password, $row["password"])) {
            // Contraseña correcta: Iniciar sesión y establecer variables de sesión
            $_SESSION['username'] = $username;
            header("Location: inicio.php"); // Redirigir a la página principal después de iniciar sesión
            exit; // Finalizar el script después de redirigir
        } else {
            echo "<p>Contraseña incorrecta</p>";
            ?>
            <div>
                 <br> <a href="../index.html"><button>Regresar</button></a><br>  </div>
      <?php
        }
    } else {
        // Si no se encontró en usuarios, verificar en la tabla de admin
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username = :control");
        $stmt->bindParam(':control', $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC); // Obtener la fila de resultados
            // Verificar la contraseña
            if ($password==$row["password"]) {
                // Contraseña correcta: Iniciar sesión y establecer variables de sesión
                $_SESSION['username'] = $username;
                header("Location: vistaAdmin.php"); // Redirigir a la página de administrador después de iniciar sesión
                exit; // Finalizar el script después de redirigir
            } else {
                echo "<p>Contraseña incorrecta</p>";
                ?>
                <div>
                     <br> <a href="../index.html"><button>Regresar</button></a><br>  </div>
          <?php
            }
        } else {
            echo "<p>Usuario no encontrado</p>";
            ?>
            <div>
                 <br> <a href="../index.html"><button>Regresar</button></a><br>  </div>
      <?php
        }
    }
} else {
    echo "Por favor, complete todos los campos.";
}
?>
