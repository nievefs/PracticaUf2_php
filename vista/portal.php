<!DOCTYPE html>
<html>
    <head>
        <title>Portal</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="<?php echo APP_URL ?>/vista/estil.css" type="text/css">
    </head>
    <body>
        <header>MIRA PER ON!</header>
        <div class="subHeader"><?php echo $missatge; ?>!</div>
        <p></p>
        <section id="menu">
            <!-- <form method="post" action="../controlador/controladorPortal.php"> -->
                <form method="post" action="<?php echo APP_URL?>/controlador/controladorPortal.php"> 
                <article><button type="submit" value="sortir" name="sortir">Sortir</button></article>
            </form>
        </section>
        <?php
        if ($opcio == "1") { //Jugar
        ?>
            <footer class="footerPortal">
                <section>
                    <!-- <form method="post" action="../controlador/controladorPortal.php"> -->
                    <form method="post" action="<?php echo APP_URL?>/controlador/controladorPortal.php">
                        <p>
                            <label for="categoria">Selecciona una categoria</label>
                            <select name="categoria">
                                <option value="cinema">Cinema</option>
                                <option value="musica">Música</option>
                                <option value="jocs">Jocs</option>
                                <option value="informatica">Informàtica</option>
                                <option value="esports">Esports</option>
                            </select>                   
                            <button type="submit" value="enviarCategoria" name="enviarCategoria">Enviar Categoria</button>
                        </p>
                    </form>
                </section>
            </footer> 
        <?php
        } else if ($opcio == "2") {//Añadir pregunta
        ?>
            <footer class="footerPortal">
                <section>
                    <p>
                        <!-- <h3> De moment no afegim res <h3>  -->
                            <h3> De momento no has añadido nada <h3>
                    </p>
                </section>
            </footer>
        <?php
        }else if ($opcio=="3"){ //Contestar pregunta
        ?>
            <footer class="footerPortal">
                <section>
                   <!-- <form method="post" action="../controlador/controladorPortal.php"> -->
                   <form method="post" action="index.php?controlador=portal">
                        <p>
                            <label for="pregunta"><?php echo $enunciat; ?></label>
                            <p></p>
                            <?php for ($i = 0; $i < count($respostes); $i++) { ?>
                                <input type="radio" name="resposta" value=<?php echo $i;?>><?php echo $respostes[$i];?><br>
                            <?php } ?>
                            <p></p>
                            <button type = "submit" value = "enviarResposta" name = "enviarResposta">Contestar</button>
                        </p>
                    </form>
                </section>
            </footer>    
        <?php
        }else{ //Mostrem resultat //Mostramos Resultados
        ?>
            <footer class="footerPortal">
                <section>
                    <p>
                        <h3><?php echo $resposta; ?><h3> 
                        <p><img src="imatges/"<?php echo $imatge; ?> alt="No hi ha imatge"/></p>
                    </p>
                </section>
            </footer>
        <?php
        }
        ?>
    </body>
</html>
