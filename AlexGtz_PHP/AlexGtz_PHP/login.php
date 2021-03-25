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
        <section class="formulario">
            <fieldset><!--Sección para formularios-->
                <legend>Inicie Sesión</legend> <!--Mostrar leyenda de formulario-->
                    <div class="contenedor-campos1">
                        <div class="campo"> 
                        <label>E-mail</label> <!--Funciona como párrafo-->
                        <input type="text" placeholder="Ingresa su e-mail">
                        </div>
                        <div class="campo"> 
                        <label>Contraseña</label> <!--Funciona como párrafo-->
                        <input type="text" placeholder="Ingresa su contraseña">
                        </div>
                        <input class="boton centro" style="margin-right: 15%" type="submit" value="iniciar sesión">
                        <input class="boton centro" style="margin-left: 15%" type="submit" value="Cancelar">
                        </div>

    <footer class="footer">
        <p>Todos los derechos reservados - Guillermo Cacho 2021</p>
    </footer>
</body>
</html>