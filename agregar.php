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
    <nav id="cabecera">
        <ul class="nav-main">
            <li>
                <i class="fa fa-arrow-left"></i>
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

<br><br><br><br>
<?php 


$oMysql = new mysqli("localhost", "root", "", "cv");
 // $conexion = pg_connect("host=localhost port=5432 user=nombreUsuario password=passwordUsuario dbname=nomBD", PGSQL_CONNECT_FORCE_NEW);
// $conexion = pg_connect("host=localhost dbname=BASE_DE_DATOS user=USUARIO password=CONTRASEÑA");		
//include ("conexionLocal.php"); importar el codigo de conexionlocal.php
//poner para hacer la conexion
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$Query= "INSERT INTO datos VALUES ('".$_POST["no_control"]."','".$_POST["nombre"]."','".$_POST["apellidos"]."','".$_POST["direccion"]."','".$foto."','".$_POST["telefono"]."','".$_POST["correo"]."','".$_POST["linkedin"]."','".$_POST["aptitudes"]."','".$_POST["universidad"]."','".$_POST["carrera"]."','".$_POST["fin_estudio"]."','".$_POST["area_estudio"]."','".$_POST["empresa1"]."','".$_POST["duracion1"]."','".$_POST["puesto1"]."','".$_POST["descripcion1"]."','".$_POST["empresa2"]."','".$_POST["duracion2"]."','".$_POST["puesto2"]."','".$_POST["descripcion2"]."','".$_POST["empresa3"]."','".$_POST["duracion3"]."','".$_POST["puesto3"]."','".$_POST["descripcion3"]."','".$_POST["pasantias"]."','".$_POST["certificados"]."','".$_POST["idioma1"]."','".$_POST["idioma2"]."','".$_POST["idioma3"]."')";
          
		  //$oMysql->query    seria como Objeto.metodo
$Result = $oMysql->query( $Query );  // se lanza la consulta

if($Result!=null)
    header("Location: plantilla.php");

else
  	print("No se pudo agregar");


	 
   ?>
<br><br><button type="button"><a href="index.php">Regresar</a></button>
</body>
</html>