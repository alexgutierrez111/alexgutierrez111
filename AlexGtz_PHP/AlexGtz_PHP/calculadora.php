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

    <?php
        $suma=0;
        $Numero_1=0;
        $Numero_2=0;
        if(isset($_POST["Enviar"])){
            //Entrada de datos
            $Numero_1=$_POST["Numero_1"]; //$_POST[""] lo que va entre comillas es el dato que vamos a absorver
            $Numero_2=$_POST["Numero_2"];
            //Salida de datos
            $suma=$Numero_1+$Numero_2;
        }
        //--------------------------------------
        $resta=0;
        $Numero_1_1=0;
        $Numero_2_1=0;
        if(isset($_POST["Enviar"])){
            //Entrada de datos
            $Numero_1_1=$_POST["Numero_1_1"]; //$_POST[""] lo que va entre comillas es el dato que vamos a absorver
            $Numero_2_1=$_POST["Numero_2_1"];
            //Salida de datos
            $resta=$Numero_1_1-$Numero_2_1; // * /
        }
    ?>

    <main class="contenedor sombra"> <!--Solo un main por página-->
        <section class="formulario">
            <form method="post"> <!-------Siempre se pone en formularios---------->
                <legend>Calculadora</legend>
                   
                <div class="contenedor-campos centrar">
                <!----------------------------------------------Suma---------------------------------------------------->
                    <div class="campo">
                        <input type="number" id="Numero_1" name="Numero_1" value="<?=$Numero_1?>">
                    </div>
                    <div class="campo alinear-centro">
                        <label style="font-size: 5rem;">+</label>
                    </div>
                    <div class="campo">
                        <input type="number" id="Numero_2" name="Numero_2" value="<?=$Numero_2?>">
                    </div>
                    <div class="campo alinear-centro">
                        <label style="font-size: 5rem;">=</label>
                    </div>
                    <div class="campo">
                        <input type="number" readonly="readonly" id="Numero_Res" name="Numero_Res" value="<?=$suma?>">
                    </div>
                    <!----------------------------------------------Suma---------------------------------------------------->
                    <!----------------------------------------------Resta---------------------------------------------------->
                    <div class="campo">
                        <input type="number" id="Numero_1_1" name="Numero_1_1" value="<?=$Numero_1_1?>">
                    </div>
                    <div class="campo alinear-centro">
                        <label style="font-size: 5rem;">-</label>
                    </div>
                    <div class="campo">
                        <input type="number" id="Numero_2_1" name="Numero_2_1" value="<?=$Numero_2_1?>">
                    </div>
                    <div class="campo alinear-centro">
                        <label style="font-size: 5rem;">=</label>
                    </div>
                    <div class="campo">
                        <input type="number" readonly="readonly" id="Numero_Res" name="Numero_Res" value="<?=$resta?>">
                    </div>
                    <!----------------------------------------------Resta---------------------------------------------------->
                </div>
                <div class="alinear-centro">
                    <input class="boton w-100" type="submit" value="Enviar" id="Enviar" name="Enviar">
                </div>  
                
            </form>
        </section>
    </main>

    <footer class="footer">
        <p>Todos los derechos reservados - Guillermo Cacho 2021</p>
    </footer>

</body>

</html>