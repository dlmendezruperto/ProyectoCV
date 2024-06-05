<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style2.css" title="Color">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<title>Datos</title>
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
    <br><br><br><br><br>
    <div class="texto">
        <h2>Datos del CV</h2>
</div>

<?php 
$control=$_GET['Control'];
require 'conexion.php';	
$conn = connection();

$query = $conn->prepare("SELECT * FROM datos WHERE no_control = :Control");
        $query->bindParam(':Control', $control);
        $query->execute();

if($query->rowCount() <= 0) { 
  echo "<div align='center'>"; 
  echo "<h2>No se encontraron registros</h2>"; 
  echo "</div><hr> "; 
   }else{?>

   <div>
       <table id='tabla'>
        <tr>
		<th>No. control</th>
		<th>Nombre(s)</th>
		<th>Apellidos</th>
		<th>Telefono</th>
        <th>Correo</th>
        <th>Ciudad</th>
        <th>Carrera</th>
        <th>Fin de estudio</th>
		</tr>
		<?php
		 // fetch_array() Obtiene una fila de resultado como un array asociativo
         while ($row = $query->fetch(PDO::FETCH_ASSOC)){
               ?>
               <tr>
               <td><?php printf($row["no_control"]);?></td>
               <td> <?php printf($row["nombre"]);?></td>
               <td> <?php printf($row["apellidos"]);?></td>
               <td> <?php printf($row["telefono"]);?></td>
               <td> <?php printf($row["correo"]);?></td>
               <td> <?php printf($row["direccion"]);?></td>
               <td> <?php printf($row["carrera"]);?></td>
               <td> <?php printf($row["fin_estudio"]);?></td>
               </tr>
<?php	}
}
?>
</table></div>
<br><br><br><br><br><br>
<center><a href="vistaAdmin.php"><button class="btn">Regresar</button></a></center>
</body>
</html>
