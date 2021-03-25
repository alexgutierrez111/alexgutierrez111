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
    <form method="post" class="formulario" action="php/mostar.php">
    <legend>Cuentanos tu opinión</legend> <!--Mostrar leyenda de Formulario-->
        <div class="contenedor-campos1"> <!--Sub-Secciones y formulario-->
            <div class="campo">
                <label>Nombre:</label><!--Funciona como el párrafo-->
                <input type="text" placeholder="Tu Nombre">
            </div>
            <div class="campo">
                <label>Apellido:</label>
                <input type="text" placeholder="Tu Apellido" name="Apellido">
            </div>
            <div class="campo">
                <label>Telefono:</label>
                <input type="number" placeholder="Tu Teléfono" name="Telefono">
            </div>
            <div class="campo">
                <label>Correo:</label>
                <input type="email" placeholder="Tu Correo" name="Correo">
            </div>
            <div class="campo">
                <label>Mensaje:</label>
                <textarea> </textarea>
            </div>
        </div>
            <div class="alinear-derecha flex">
                <input class="boton w-100" type="submit" value="Enviar">
            </div>  
        </form>
    </main>
    
    <footer class="footer">
        <p>Todos los derechos reservados - Alejandro Gutierrez 2021</p>
    </footer>
</body>
</html>