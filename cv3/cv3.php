<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="ANA LÓPEZ FERNÁNDEZ​​">
    <meta name="description" content="">
    <title>CV</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="PLANTILLA2.css" media="screen">
    <meta name="generator" content="Nicepage 6.11.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="PLANTILLA2">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
  <?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

$servername = "localhost";
$dbname = "cv";
$user = "root";
$pass = "";
//$mysql = new mysqli("localhost", "root", "", "agenda");

// Verificar la conexión
//if ($mysql->connect_error) {
//    die("Error de conexión: " . $mysql->connect_error);
//}

try { 
    // Crear conexión PDO 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass); 


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//echo "Conexión exitosa";
//. $_SESSION['username']
// Buscar el usuario en la base de datos
$Query = "SELECT * FROM datos WHERE no_control ='". $_SESSION['username']."'";
$Result = $conn->query($Query);

if ($Result === false) {
    die("Error al ejecutar la consulta: " . $mysql->error);
}

$numeroRegistros = $Result->rowCount();

if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron resultados</h2>"; 
     echo "</div><hr> "; 
   }else{
   ?>
   <?php
		 // fetch_array() Obtiene una fila de resultado como un array asociativo
         while($row = $Result->fetch()) {    
           ?>
  <body data-home-page="PLANTILLA2.html" data-home-page-title="PLANTILLA2" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="es">
    <section class="u-clearfix u-section-1" id="cvp2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-custom-color-4 u-radius u-shape u-shape-round u-shape-1"></div>
        <div class="u-palette-3-base u-shape u-shape-rectangle u-shape-2"></div>
        <h6 class="u-align-center u-text u-text-body-alt-color u-text-1">Mi perfil </h6>
        <h6 class="u-align-center u-text u-text-body-alt-color u-text-2">Contacto </h6>
        <a href="#" class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg></span>&nbsp;<?php printf($row["telefono"]); ?>
        </a>
        <p class="u-align-center u-text u-text-body-alt-color u-text-3"><span class="u-file-icon u-icon u-text-white"><img src="images/347803-d3059af3.png" alt=""></span>&nbsp;<?php printf($row["correo"]); ?>
        </p>
        <p class="u-align-center u-text u-text-default u-text-white u-text-4"><span class="u-file-icon u-icon u-text-white"><img src="images/3449750-689288f2.png" alt=""></span>&nbsp;&nbsp;<?php printf($row["linkedin"]); ?>
        </p>
        <p class="u-align-center u-text u-text-body-alt-color u-text-default u-text-5"><span class="u-file-icon u-icon u-text-white"><img src="images/447031-09d82861.png" alt=""></span>&nbsp;&nbsp;&nbsp;<?php printf($row["direccion"]); ?>
        </p>
        <div class="u-container-style u-custom-color-4 u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h4 class="u-text u-text-6">Idiomas </h4>
          </div>
        </div>
        <ul class="u-text u-text-body-alt-color u-text-default u-text-7">
          <li><?php printf($row["idioma1"]); ?></li>
          <li><?php printf($row["idioma2"]); ?></li>
          <li><?php printf($row["idioma3"]); ?></li>
        </ul>
        <div class="u-container-style u-custom-color-4 u-group u-shape-rectangle u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <h4 class="u-align-center u-text u-text-8">Competencias </h4>
          </div>
        </div>
        <p class="u-text u-text-white u-text-9"><?php printf($row["certificados"]); ?></p>
        <div class="u-container-style u-custom-color-4 u-group u-shape-rectangle u-group-3">
          <div class="u-container-layout u-container-layout-3">
            <h4 class="u-align-center u-text u-text-10"> A cerca de mi</h4>
          </div>
        </div>
        <p class="u-align-center u-text u-text-white u-text-11"><?php printf($row["aptitudes"]); ?></p>
        <img class="u-image u-image-default u-image-1" src="images/cbeb218e2831f2bca7defb925fcafcefb9991133c28262038c3867251fe160641bea1c65f5b83b29cc21e7555e7f9c3dc9c0eea19fdde2df2201fe_1280.jpg" alt="" data-image-width="1280" data-image-height="853">
        <h1 class="u-text u-text-12"><?php printf($row["nombre"]); ?> <?php printf($row["apellidos"]); ?></h1>
        <div class="u-container-style u-custom-color-4 u-group u-shape-rectangle u-group-4">
          <div class="u-container-layout u-container-layout-4">
            <h4 class="u-text u-text-13">Experiencia laboral </h4>
          </div>
        </div>
        <p class="u-align-center u-text u-text-14"> <?php printf($row["empresa1"]); ?>&nbsp;<br><?php printf($row["duracion1"]); ?>&nbsp;<br><?php printf($row["puesto1"]); ?>
<br><?php printf($row["descripcion1"]); ?>
        </p>
        <p class="u-align-center u-text u-text-15"> <?php printf($row["empresa2"]); ?>&nbsp;<br><?php printf($row["duracion2"]); ?>&nbsp;<br><?php printf($row["puesto2"]); ?>
<br><?php printf($row["descripcion2"]); ?>
        </p>
        <p class="u-align-center u-text u-text-16"> <?php printf($row["empresa3"]); ?><br>&nbsp;<?php printf($row["duracion3"]); ?><br>&nbsp;<?php printf($row["puesto3"]); ?>
<br><?php printf($row["descripcion3"]); ?>
        </p>
        <div class="u-container-style u-custom-color-4 u-group u-shape-rectangle u-group-5">
          <div class="u-container-layout u-container-layout-5">
            <h4 class="u-align-center u-text u-text-17">Educacion </h4>
          </div>
        </div>
        <p class="u-text u-text-18">
          <span style="font-weight: 700;"><?php printf($row["carrera"]); ?></span> <?php printf($row["universidad"]); ?>
          <?php printf($row["fin_estudio"]); ?>
        </p>
      </div>
    </section>
    
    <center><button type="button"><a href="index.php">Crear cuenta en LinkedIn</a></button>
<br><br>

<center><button id="download">Descargar PDF</button></center><br><br>

<script>
    document.getElementById('download').addEventListener('click', () => {
        const { jsPDF } = window.jspdf;
        const content = document.getElementById('cvp2');
        
        // Dimensiones de una página tamaño carta en puntos (1 pulgada = 72 puntos)
        const pageWidth = 8.5 * 72;
        const pageHeight = 11 * 72;

        html2canvas(content, { scale: 2 }).then(canvas => {
            const imgData = canvas.toDataURL('image/png'); //aqui se usa para transfromar lo que se toma
            const imgWidth = canvas.width;
            const imgHeight = canvas.height;

            // Escalar el contenido al tamaño de una página tamaño carta
            const ratio = Math.min(pageWidth / imgWidth, pageHeight / imgHeight);
            const scaledWidth = imgWidth * ratio;
            const scaledHeight = imgHeight * ratio;

            const pdf = new jsPDF({
                orientation: 'portrait',
                unit: 'pt',
                format: 'letter'
            });

            // Centrar el contenido en la página
            const offsetX = (pageWidth - scaledWidth) / 2;
            const offsetY = (pageHeight - scaledHeight) / 2;

            pdf.addImage(imgData, 'PNG', offsetX, offsetY, scaledWidth, scaledHeight);
            pdf.save('MiCV.pdf');
        });
    });
</script>  
  
</body></html>

<?php	}
}
?>

<?php
}catch(PDOException $e) { 
    die("Conexión fallida: " . $e->getMessage()); 
    } 
    // Cerrar la conexión al finalizar 
    $conn = null; 

// Cerrar la conexión
//$mysql->close();
?>