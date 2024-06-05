<!-- login.php -->

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
       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style2.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<title>Inicio</title>
</head>

<body>
    <nav id="cabecera">
        <ul class="nav-main">
            <li>
            <a href="procesocerrar.php"><i class="fa fa-arrow-left"></i></a>

            </li>
        </ul>
        <div class="icono">
            <h1><i class="bi bi-file-earmark-person"> </i>ITO-Vitae</h1>
        </div>
        <ul class="nav-menu-right">
            <li>

            </li>
        </ul>
    </nav>
    <br><br><br>

    <div class="gracias">
    <?php
    echo "Bienvenid@ " . $_SESSION['username'];
    ?>
    </div><br>
    <script>
        
        function confirmarEliminar(control) {
        if (confirm(`¿Estás seguro de eliminar el usuario ${control}?`)) {
            window.location.href = `eliminar.php?Control=${control}`;
        } else 
            return false;
    }
</script>

    <div class="texto">
            <h2>Usuarios registrados</h2>
        </div>
<?php 	
require 'conexion.php';
        $conn = connection();

        $stmt=$conn->query("SELECT * FROM usuarios");

	 if($stmt->rowCount() <= 0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron registros</h2>"; 
     echo "</div><hr> "; 
   }else{
   ?>
       <table id=tabla>
        <tr>
		<TH>No. control</TH>
		<TH>Nombre</TH>
		<TH>Fecha de registro</TH>
		<TH>Mostrar datos</TH>
		<th>Eliminar</th>
		</tr>
		<?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$control=$row["username"];
           ?>
		   <tr>
		   <td><?php printf($row["username"]); ?></td>
		   <td> <?php printf($row["nombre"]); ?>   </td>
		   <td> <?php printf($row["fecha_registro"]); ?></td>

           <td><a href="mostrar.php ? Control=<?php print($control); ?>"><button class="btn" ><i class="bi bi-window-plus"></i></button></a></td>
		   <td><button class="btn" onclick="confirmarEliminar('<?php echo $control; ?>',this)"><i class="bi bi-trash3"></i></button></td>
           </tr>
<?php	}
}
?>
</table>

</body>
</html>