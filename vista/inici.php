<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="<?php echo APP_URL ?>/vista/estil.css" type="text/css">
    </head>

    <body>
        <!-- MIRA POR DONDE -->
        <header>MIRA PER ON!</header> 
        <p></p>
        <!-- <form method="post" action="../controlador/controladorInici.php"> -->
        <form method="post" action="index.php?controlador=inici">
            <!-- <form method="post" action="pruebas.php"> -->
            <section class="seccio1"> 
                <button class="button1" type="submit" value="jugar" name="jugar">JUGAR</button>
            </section>        
            <section class="seccio2">
                <button class="button2" type="submit" value="afegirPregunta" name="afegirPregunta">AÑADIR PREGUNTA</button>
            </section> 
        </form>
    </body>

</html>
