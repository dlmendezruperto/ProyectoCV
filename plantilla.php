<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>ITOVitae - Diseño de su CV</title>
</head>
<body>
<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirigir a la página de inicio de sesión
    exit;
}

// Resto del código aquí
//echo "Bienvenido, " . $_SESSION['username'];

?>
    <nav id="cabecera">
        <ul class="nav-main">
            <li>
                <i class=""></i>
            </li>
        </ul>
        <div class="icono">
            
            <h1><i class="bi bi-file-earmark-person"> </i>ITOVitae</h1>
        </div>
        
        <ul class="nav-menu-right">
            <li>
                
            </li>
        </ul>
    </nav>
    <h2>Escoja el diseño de su Curriculum Vitae:</h2>

    <div class="botones1y2">
        <a href="cv/cv.php"><button class="estofado"><img src="img/cv1.jpg" alt="" height="555px"></button></a>
        <a href="cv2/cv2.php"><button class="asado"><img src="img/cv2.jpg" alt="" height="555px"></button></a>
    </div>

    <div class="botones3y4">
        <a href="cv3/cv3.php"><button class="estofado"><img src="img/cv3.jpg" alt="" height="555px"></button></a>
        <a href="cv4/cv4.php"><button class="asado"><img src="img/cv4.jpg" alt="" height="555px"></button></a>
    </div>

    <br><br>
    <center><a href="php/procesocerrar.php"><button type="button" id="cerrar">Cerrar sesión</button></a>
    <br><br>

<br><br>
</body>
</html>