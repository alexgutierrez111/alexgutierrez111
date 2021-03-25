<?php
    function head(){
        echo "<header>";
        $variablenombre= "Guillermo Cacho"; //--- no es necesario asignar el tipo de variable: string, int, bool, etc.
        $edad= 25;
        echo "<h1>Hola! mi nombre es:</h1>"; //Así se comenta php en una línea 
        echo "<h2> $variablenombre y tengo: " . $edad . " años de edad</h2>";
        echo "</header>";
    }
    
    function navegacion(){
        echo"<div class=\"nav-fondo\">
                <nav class=\"contenedor nav-principal\">
                    <a href=\"index.php\">Inicio</a> <!--Hipervinculo-->
                    <a href=\"calculadora.php\">Calculadora</a> 
                    <a href=\"registro.php\">Registrarse</a> 
                    <a href=\"login.php\">Log In</a> 
                </nav>
            </div>";
    }

    
    function banner(){
        echo "<section class=\"banner\"> <!--AltGr + ?-->
                <div class=\"contenido-banner centrar\"> <!--Agregamos la clase alinear para centrar los objetos dentro del banner-->
                    <h2>Diseño y Desarrollo <span> WEB</span></h2>

                    <div class=\"ubicacion\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-current-location\" width=\"84\" height=\"84\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"#f6c51a\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                            <circle cx=\"12\" cy=\"12\" r=\"3\" />
                            <circle cx=\"12\" cy=\"12\" r=\"8\" />
                            <line x1=\"12\" y1=\"2\" x2=\"12\" y2=\"4\" />
                            <line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"22\" />
                            <line x1=\"20\" y1=\"12\" x2=\"22\" y2=\"12\" />
                            <line x1=\"2\" y1=\"12\" x2=\"4\" y2=\"12\" />
                        </svg> 
                        <p> La Paz, BCS.</p>
                    </div>  
                    <a class=\"boton w-75\" href=\"contacto.php\">Contáctanos</a>
                </div>
            </section>";
    }
?>