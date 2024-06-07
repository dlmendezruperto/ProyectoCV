<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Ingrese sus datos - ITOVitae</title>
    <style>
        #image-container {
            width: 50%;
            height: 200px;
            border: 1px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin-top: 10px;
        }
        #image-container img {
            width: 100%;
            height: auto;
            
        }
        #preview-image {
    max-width: 100%;
    height: auto;
}
        
    </style>
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
    <center> <h1>Ingreso de datos</h1></center>

    <div class="datospers">
    <form action="agregar.php" target="" method="POST" enctype="multipart/form-data">
    <section class="f1">          <br>
             
            <h2>Datos personales</h2>
            <br>
            <div class="container">
            <div class="left">
            <label for="nombre">Nombre:
                <br>
                <input type="text" name="nombre" id="nombre">
            </label>
            </div>
            <div class="right">
            <label for="apellidos">Apellidos:
                <br>
                <input type="text" name="apellidos" id="apellidos">
            </label>
            </div>    
        </div>
            <div class="container">
            <div class="left">
            <label for="no_control">No. de Control: <br>
                <input type="number" name="no_control" id="no_control">
            </label>
            </div> 

            <div class="right">
            <label for="direccion">Municipio, Estado: <br>
                <input type="text" name="direccion" id="direccion">
            </label>
            </div>  
        </div> 

            <div class="container">
            <div class="left" width="70%">
            <label for="foto">Suba su foto:</label>
            <br>
            <input type="file" id="foto" name="foto" accept="image/*">
            <br>
            <div id="image-container">
            
                <center><img id="preview-image" src="" alt="Vista previa"></center>
            </div>

            </div>  

            <div class="right" width="30%">
            <label for="telefono">Tel&eacute;fono: <br>
            <input type="number" id="telefono" name="telefono">    
            </label>
            </div>
        </div> 
            


            <script>
            document.getElementById('foto').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.getElementById('preview-image');
                    img.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });


    </script>
            
            <div class="container">
            
            <div class="left">
            <label for="correo">Correo electr&oacute;nico: <br>
            <input type="email" name="correo" id="correo" placeholder="tucorreo@dominio.com">
            </label>
            </div>    
            <div class="right">
            <label for="linkedin">Linkedin:
                <input type="text" name="linkedin" id="linkedin">
            </label>
            </div> 
            
        </div> 
        <div class="container">
            <div class="left">
            <label for="aptitudes">Perfil:<br>
            <textarea name="aptitudes" id="aptitudes" cols="55" rows="2" placeholder="Párrafo breve en el que debes resumir tu experiencia y aptitudes relevantes entre cuatro y seis líneas. Ej: Soy una persona que se desempeña muy bien en lo que hace, soy paciente y un lider nato..."></textarea><br>
            </label>
            </div> 
              
        </div> <br><br>
        </section>
        </div>

        
        </div>
        <br><br>
        <div class="estudios">
        
        <section class="f2">
            <h2>Estudios</h2>

            <div class="container">
            <div class="left">
            <label for="universidad">Universidad: <br>
            <input type="text" name="universidad" id="universidad">
        </label>
            </div>
            <div class="right">
            <label for="carrera">Carrera:</label> <br>
        <select class="carrera" name="carrera">
            <option value="Ing. Electrónica" selected>Electr&oacute;nica</option>
            <option value="Ing. Sistemas Computacionales">Sistemas en Computaci&oacute;n</option>
            <option value="Ing. Informática">Inform&aacute;tica</option>
            <option value="Ing. Gestión Empresarial">Gesti&oacute;n empresarial</option>
            <option value="Ing. Industrial">Industrial</option>
            <option value="Ing. Química">Qu&iacute;mica</option>
        </select>
            </div>    
        </div>
            <div class="container">
            <div class="left">
            <label for="fin_estudio">Fecha de termino de estudios: <br>
            <input type="date" name="fin_estudio" id="fin_estudio">
        </label>
            </div>
            <div class="right">
            
            </div>    
        </div>   
        <div class="container">
            <div class="left">
            <label for="area_estudio">&Aacute;rea de desarrollo profesional: <br>
        <textarea name="area_estudio" id="area_estudio" cols="50" rows="2" placeholder="Escribe un poco acerca de cuáles áreas dentro de tu ámbito profesional te desenvuelves de la mejor manera."></textarea>
        </label>
            </div>    
        </div>       
        <br><br>

        </section>
        </div><br><br>

        <div class="experiencia">
        <section class="f3">
        <h2>Experiencia laboral</h2>

        <div class="container">

            <div class="left">
            <label for="empresa1">Empresa:</label><br>
            <input type="text" name="empresa1" id="empresa1"><br>
            </div>
            <div class="right">
            <label for="duracion1">Duración del empleo:</label><br>
            <input type="text" name="duracion1" id="duracion1" placeholder="mm/aaaa - mm/aaaa"><br>
            </div>    
        </div>   
        <div class="container">
            <div class="left">
                <label for="puesto1">Puesto:</label><br>
                <input type="text" name="puesto1" id="puesto1"><br>
            </div>    
            <div class="right">
                <label for="descripcion1">Descripcion:</label><br>
                <textarea name="descripcion1" id="descripcion1" cols="50" rows="2" placeholder="Comenta brevemente de las actividades que realizabas"></textarea><br>
            </div>  
        </div>

        <div id="oculto1" style="display:none;">
        <br>
        <center><h3>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</h3></center>
        <div class="container">
                <br>
            <div class="left">
            <label for="empresa2">Empresa:</label><br>
            <input type="text" name="empresa2" id="empresa2"><br>
            </div>
            <div class="right">
            <label for="duracion2">Duración del empleo:</label><br>
            <input type="text" name="duracion2" id="duracion2" placeholder="mm/aaaa - mm/aaaa"><br>
            </div>    
        </div>   
        <div class="container">
            <div class="left">
                <label for="puesto2">Puesto:</label><br>
                <input type="text" name="puesto2" id="puesto2"><br>
            </div>
            <div class="right">
                <label for="descripcion2">Descripcion:</label><br>
                <textarea name="descripcion2" id="descripcion2" cols="50" rows="2" placeholder="Comenta brevemente de las actividades que realizabas"></textarea><br>
            </div>  
        </div>
        </div> <br>
        <button type="button" id="abc1">Agregar experiencia</button>
        
        <div id="oculto2" style="display:none;">
        
        <center><h3>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</h3></center>
        <div class="container"><br>
            <div class="left">
            <label for="empresa3">Empresa:</label><br>
            <input type="text" name="empresa3" id="empresa3"><br>
            </div>
            <div class="right">
            <label for="duracion3">Duración del empleo:</label><br>
            <input type="text" name="duracion3" id="duracion3" placeholder="mm/aaaa - mm/aaaa"><br>
            </div>    
        </div>   
        <div class="container">
            <div class="left">
                <label for="puesto3">Puesto:</label><br>
                <input type="text" name="puesto3" id="puesto3"><br>
            </div>   
            <div class="right">
                <label for="descripcion3">Descripcion:</label><br>
                <textarea name="descripcion3" id="descripcion3" cols="50" rows="2" placeholder="Comenta brevemente de las actividades que realizabas"></textarea><br>
            </div>  
            
        </div>
        
        </div>
        
        <button type="button" id="abc2" style="display:none;">Agregar experiencia</button>  
        <br><br> 
    </section>
        <br><br>

        <div class="proyectos">
        <section class="f3">
            <h2>Más información</h2>

            <div class="container"><br>
            <div class="left">
            <label for="pasantias">Pasantias:</label><br>
            <textarea name="pasantias" id="pasantias" cols="50" rows="2" placeholder="Donde y que hiciste en tu servicio social y/o residencias."></textarea><br>
        </div>
            </div>

            <div class="container"><br>
            <div class="left">
            <label for="certificados">Certificados:</label><br>
            <textarea name="certificados" id="certificados" cols="50" rows="2"></textarea><br>
            </div>
            </div>
        
            <br><br>
            <div class="container"><br>

            <div>
            <label for="idioma1">Idioma:</label><br>
            <input type="text" name="idioma1" id="idioma1"></input><br>
            </div>
            <div>
            <label for="idioma2">Idioma 2: (opcional)</label><br>
            <input type="text" name="idioma2" id="idioma2"></input><br>
            </div>
            <div>
            <label for="idioma3">Idioma 3: (opcional)</label><br>
            <input type="text" name="idioma3" id="idioma3"></input><br>
            </div>
            </div>
            <br><br>
            </section>
        <br>
        <center> <div id="enviar"> <input type=submit value="Enviar"></div></center>
        <br><br>
        <center><a href="procesocerrar.php"><button type="button" id="cerrar">Cerrar sesión</button></a>
        <br><br><br>
    </form>
    </div>
    <script type="text/javascript" src="script.js"></script> 
    

</body>
</html>