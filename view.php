<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Lorna Alvarado">
  <meta name="description" content="">
  <title>Casa</title>
  <link rel="stylesheet" href="css\nicepage.css" media="screen">
  <link rel="stylesheet" href="css\Casa.css" media="screen">
  <script class="u-script" type="text/javascript" src="css\jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="css\nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 6.10.5, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Casa">
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
                                                <!--HTML-->
<body data-home-page="Casa.html" data-home-page-title="Casa" data-path-to-root="./" data-include-products="false"
  class="u-body u-xl-mode" data-lang="es">
  <section class="u-clearfix u-section-1" id="sec-084f">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-container-style u-custom-color-1 u-group u-radius u-shape-round u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-border-5 u-border-custom-color-2 u-line u-line-horizontal u-line-1"></div>
          <div class="u-container-style u-group u-shape-rectangle u-white u-group-2">
            <div class="u-container-layout u-valign-bottom u-container-layout-2">
              <img class="u-expanded-width u-image u-image-default u-image-1" src="images/50056fb9.svg" alt=""
                data-image-width="400" data-image-height="265">
            </div>
          </div>
		<?php
		 // fetch_array() Obtiene una fila de resultado como un array asociativo
         while($row = $Result->fetch()) {    
           ?>
           <a href="#" class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1"><span
              class="u-file-icon u-icon"><img src="images/901141.png" alt=""></span>&nbsp;<?php printf($row["telefono"]); ?> 
          </a>
          <p class="u-text u-text-1"><span class="u-file-icon u-icon"><img src="images/3870795.png"
                alt=""></span>&nbsp;<?php printf($row["correo"]);?> 
          </p>
          <p class="u-text u-text-2"><span class="u-file-icon u-icon"><img src="images/7491991.png"
                alt=""></span>&nbsp;<?php printf($row["linkedin"]);?> 
          </p>
          <p class="u-text u-text-3"><span class="u-file-icon u-icon"><img src="images/4284108.png"
                alt=""></span>&nbsp;<?php printf($row["ciudad"]);?> 
          </p>
          <div class="u-border-3 u-border-custom-color-2 u-line u-line-horizontal u-line-2"></div>
          <h4 class="u-custom-font u-font-arial u-text u-text-4">Educación&nbsp;</h4>
          <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-3"></div>
          <h6 class="u-custom-font u-font-arial u-text u-text-default u-text-5"><?php printf($row["carrera"]);?> </h6>
          <h6 class="u-custom-font u-font-arial u-text u-text-default u-text-6"><?php printf($row["universidad"]);?> </h6>
          <p class="u-text u-text-default u-text-7"><?php printf($row["fin_estudio"]);?> </p>
          <div class="u-border-5 u-border-custom-color-2 u-line u-line-horizontal u-line-4"></div>
          <h4 class="u-custom-font u-font-arial u-text u-text-8">Certificados </h4>
          <h6 class="u-custom-font u-font-arial u-text u-text-default u-text-9"><?php printf($row["certificados"]);?> </h6>
          <h6 class="u-custom-font u-font-arial u-text u-text-default u-text-10">Inteligencia artificial </h6>
          <div class="u-border-5 u-border-custom-color-2 u-line u-line-horizontal u-line-5"></div>
          <h4 class="u-custom-font u-font-arial u-text u-text-11">Lenguajes </h4>
          <h6 class="u-custom-font u-font-arial u-text u-text-default u-text-12">Español </h6>
        </div>
      </div>
      <div class="u-border-3 u-border-grey-75 u-container-style u-group u-radius u-shape-round u-white u-group-3">
        <div class="u-container-layout u-container-layout-3">
          <div class="u-border-5 u-border-custom-color-2 u-line u-line-horizontal u-line-6"></div>
          <div class="u-border-5 u-border-custom-color-2 u-line u-line-horizontal u-line-7"></div>
          <div class="u-container-style u-custom-color-2 u-group u-shape-rectangle u-group-4">
            <div class="u-container-layout u-container-layout-4">
              <h1 class="u-custom-font u-font-arial u-text u-text-black u-text-13"><?php printf($row["nombre"]); ?> <?php printf("");?><?php printf($row["apellidos"]); ?></h1>
              <p class="u-text u-text-default u-text-14"><?php printf($row["carrera"]); ?> </p>
            </div>
          </div>
          <h3 class="u-align-center u-text u-text-15">Experienc​ia<span style="font-weight: 700;"></span>
            <span style="font-weight: 700;"></span>
          </h3>
          <p class="u-text u-text-default u-text-16"><?php printf($row["experiencia"]);?> 
          </p>
          <div class="u-border-20 u-border-palette-1-base u-line u-line-horizontal u-line-8"></div>
          <h4 class="u-text u-text-17">Referencias </h4>
          <p class="u-text u-text-default u-text-18">Texto de muestra. Haz click para seleccionar el elemento de Texto.
          </p>
        </div>
      </div>
    </div>
  </section>



  <div id="contenido">
    <h1>Mi página HTML</h1>
    <p>Este es el contenido de mi página que quiero convertir en PDF con los estilos aplicados.</p>
</div>
<center><button id="download">Descargar PDF</button></center>

<script>
    document.getElementById('download').addEventListener('click', () => {
        const { jsPDF } = window.jspdf;
        const content = document.getElementById('contenido');
        
        // Dimensiones de una página tamaño carta en puntos (1 pulgada = 72 puntos)
        const pageWidth = 8.5 * 72;
        const pageHeight = 11 * 72;

        html2canvas(content, { scale: 2 }).then(canvas => {
            const imgData = canvas.toDataURL('image/png');
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
            pdf.save('pagina.pdf');
        });
    });
</script>


</body><ea

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
