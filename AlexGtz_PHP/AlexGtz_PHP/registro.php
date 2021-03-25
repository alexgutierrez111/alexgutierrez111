<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title> <!--Comentar y no afecta el código-->
    <link rel="stylesheet" href="normalize.css"> <!--Normalizar sitio web-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@200;300&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> <!--Comando para enlazar Css-->
    <link rel="preload" href="css/style.css" as="style"> <!--Son para navegador, dejar igual solo cambiar href=" " -->
    <?php include("php/funciones.php");?>
</head>
<body>
    <?php 
        head();
        navegacion(); 
        banner();
    ?>
   <main class="contenedor sombra"> <!--Solo un main por página-->
    <form method="post" class="formulario">
            <fieldset> <!--Sección para formularios-->
                <legend>Registrate</legend> <!--Mostrar leyenda de Formulario-->
                <div class="campo">
                    <label>Correo Electrónico:</label>
                    <input type="email" placeholder="Tu Correo">
                </div>
                <div class="campo">
                    <label>Contraseña:</label>
                    <input type="password" placeholder="Crea una Contraseña">
                </div>
                <div class="campo">
                    <label>Confirmar Contraseña:</label>
                    <input type="password" placeholder="Confirma tu Contraseña">
                </div>
                <div class="centrar">
                    <input class="boton w-100" type="submit" value="Registrarse">
                </div>  
            </fieldset>
        </form>
    </main>
    <footer class="footer">
        <p>Todos los derechos reservados - Guillermo Cacho 2021</p>
    </footer>
</body>
</html>