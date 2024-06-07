<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="HANNAHMORALES​">
    <meta name="description" content="">
    <title>CV</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Casa.css" media="screen">
    <meta name="generator" content="Nicepage 6.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    

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
   <?php
		 // fetch_array() Obtiene una fila de resultado como un array asociativo
         while($row = $Result->fetch()) {    
           ?>
  <body data-home-page="Casa.html" data-home-page-title="Casa" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="es">
    <section class="u-clearfix u-section-1" id="cvp2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="custom-expanded u-custom-color-1 u-radius u-shape u-shape-round u-shape-1"></div>
        <div class="u-container-style u-custom-color-2 u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-preserve-proportions u-shape u-shape-circle u-white u-shape-2"></div>
            <img class="u-image u-image-circle u-image-1" src="data:image/jpg;base64,<?php echo base64_encode($row['foto'])?>">
          </div>
        </div>
        <h1 class="u-text u-text-1"><?php printf($row["nombre"]);?> <?php printf($row["apellidos"]); ?></h1>
        <div class="u-container-style u-custom-color-2 u-group u-shape-rectangle u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <h3 class="u-text u-text-default u-text-2">A cerca de mi </h3>
            <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-3"></div>
          </div>
        </div>
        <h3 class="u-text u-text-default u-text-3">Contacto </h3>
        <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-4"></div>
        <a href="#" class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1"><span class="u-file-icon u-icon u-text-custom-color-1"><img src="images/126341-a9562e40.png" alt=""></span>&nbsp;<?php printf($row["telefono"]); ?>
        </a>
        <p class="u-text u-text-4"><span class="u-file-icon u-icon u-text-custom-color-1"><img src="images/1917716-7b00c7bf.png" alt=""></span>&nbsp;<?php printf($row["correo"]); ?>
        </p>
        <p class="u-text u-text-5"><?php printf($row["aptitudes"]); ?></p>
        <p class="u-text u-text-6"><span class="u-file-icon u-icon u-text-custom-color-1"><img src="images/587335-b437314a.png" alt=""></span>&nbsp;<?php printf($row["linkedin"]); ?>
        </p>
        <p class="u-text u-text-7"><span class="u-file-icon u-icon u-text-custom-color-1"><img src="images/447031-d4ea3c91.png" alt=""></span>&nbsp;<?php printf($row["direccion"]); ?>
        </p>
        <div class="u-container-style u-custom-color-2 u-group u-shape-rectangle u-group-3">
          <div class="u-container-layout u-container-layout-3">
            <h3 class="u-text u-text-default u-text-8">Experiencia </h3>
            <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-5"></div>
          </div>
        </div>
        <div class="custom-expanded u-custom-color-1 u-radius u-shape u-shape-round u-shape-6"></div>
        <div class="u-container-style u-custom-color-2 u-group u-shape-rectangle u-group-4">
          <div class="u-container-layout u-container-layout-4">
            <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-7"></div>
            <h3 class="u-text u-text-default u-text-9">Educacion </h3>
            <p class="u-text u-text-10">
              <span style="font-weight: 700;"><?php printf($row["carrera"]); ?></span>
              <br>
              <br><?php printf($row["universidad"]); ?><br><?php printf($row["fin_estudio"]); ?>
            </p>
            <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-8"></div>
            <h3 class="u-text u-text-default u-text-11">Certificados </h3>
            <p class="u-text u-text-12"><?php printf($row["certificados"]); ?></p>
          </div>
        </div>
        <p class="u-text u-text-13"><?php printf($row["empresa1"]); ?><br><?php printf($row["duracion1"]); ?><br><?php printf($row["puesto1"]); ?><br><?php printf($row["descripcion1"]); ?>
        </p>
        <p class="u-text u-text-14"><?php printf($row["empresa2"]); ?><br><?php printf($row["duracion2"]); ?><br><?php printf($row["puesto2"]); ?><br><?php printf($row["descripcion2"]); ?> 
        </p>
        <p class="u-text u-text-15"><?php printf($row["empresa3"]); ?><br><?php printf($row["duracion3"]); ?><br><?php printf($row["puesto3"]); ?><br><?php printf($row["descripcion3"]); ?>  
        </p>
        <div class="u-container-style u-custom-color-2 u-group u-shape-rectangle u-group-5">
          <div class="u-container-layout u-container-layout-5">
            <h3 class="u-text u-text-default u-text-16">Idiomas </h3>
            <div class="u-custom-color-1 u-shape u-shape-rectangle u-shape-9"></div>
          </div>
        </div>
        <ul class="u-text u-text-17">
          <li><?php printf($row["idioma1"]); ?></li>
          <li><?php printf($row["idioma2"]); ?></li>
          <li><?php printf($row["idioma3"]); ?></li>
        </ul>
      </div>
    </section>


<br><br><center><button type="button"><a href="https://www.linkedin.com/signup?_l=es">Crear cuenta en LinkedIn</a></button>
<br><br>

<center><button id="download">Descargar PDF</button></center><br><br>

<br><br>
    <center><a href="../php/procesocerrar.php"><button type="button" id="cerrar">Cerrar sesión</button></a>
    <br><br>

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