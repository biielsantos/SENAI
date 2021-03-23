<!DOCTYPE HTML>
<html>
    <head>
        <title>Mercadao do Biel</title>
        <meta charset = "UTF-8"/>
        <link rel="shortcut icon" href="imagens/imagem.png" type="image/x-png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <body>
        <header>
        <div style="width: 70%; float:left; padding-left:35%;">
            <div class="col-md-4 col-md-offset-4"><h3>Mercadao do Biel</h3></div>
            <br/><br/>
        </div>
        </header>

        <section>
        <div class="container">
        <div class="container center-align">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div style="width: 70%; float:left; padding-left:20%;">
                    <div class="panel panel-primary">
                        <center><div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Login</h3></div></center>
                            <div class="panel-body">
                            <center><form name="login" id="login_usuario" action="login.php" method="post"></center>
                                 <label>Login</label> 
                                <input type="text" name="login" placeholder="Digite o seu login" maxlength="30" required="required" autofocus class="form-control" />
                                <br/>
                                <label>Senha</label> 
                                <input type="password" name="senha" placeholder="Digite a sua senha" maxlength="30"  required="required" class="form-control" />
                                <br/>
                                <input type="submit" value="Login" class="btn btn-primary" />
                                <?php
                                session_start();
                                $_SESSION['carrinho'] = [];
                                ?>
                            </div>
                         </div>   
                    </div>
                </div>
        </div>
        </div>
        </div>
        </section>
        <footer>
        </footer>
    </body>
</html>