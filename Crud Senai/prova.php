<?php
    session_start();
    if($_SESSION["status"] !="OK"){
        header('location:index.php');
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Mercadao do Biel</title>
        <meta charset = "UTF-8"/>
        <link rel="shortcut icon" href="imagens/imagem.png" type="image/x-png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <header>
            <div class="col-md-4 col-md-offset-4"><h3>Mercadao do Biel</h3></div>
            <br/><br/>
        </header>
        <nav>
            <div class="col-xs-8 col-xs-offset-2">
                <div class="col-xs-6 col-xs-offset-0">
                    <?php
                        include("menu.php");
                    ?>
                </div>
                <div class="col-xs-4 col-xs-offset-1">
           <div style="width: 35%; float:left; padding-left:55%;">
                    <?php
                        echo "<span class='glyphicon glyphicon-user' aria-hidden='true'></span>";
                        echo $_SESSION["user"];
                        echo "<a href='sair.php' style='text-decoration: none; font-weight: bold;'>&nbsp;&nbsp;Sair</a>";
                    ?>
                </div>
                </div>
            </div>
        </nav>
        <section>

        </section>
        <footer>
        </footer>
    </body>
</html>