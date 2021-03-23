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
        <br/>
        </nav>
        <section>
        <br/><br/>
        <div class="container">
        <div class="row">
        <div class="valign-wrapper">
        <div style="width: 60%; padding-left:5%; padding-right:5%;">
        <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>&nbsp;Cadastro de Produtos</h3></div>
                <div class="panel-body">
                    <form name="cadproduto" id="cadproduto" action="cadastraproduto.php" method="post">
                        <label>Descrição</label>
                        <input type="text" name="descricao" placeholder="Digite o nome" maxlength="85" required="required" class="form-control">
                        <label>Estoque</label>
                        <h5><input type="decimal" name="estoque" placeholder="Digite o estoque" maxlength="30" class="form-control"><h5>
                        <label>Valor</label>
                        <h5><input type="decimal" name="valor" placeholder="Digite o valor" maxlength="30" required="required" class="form-control"><h5>
                    <select class="browser-default" name="status">
                    <option value="" disabled selected>Status</option>
                        <option value="A">Ativo</option>
                        <option value="I">Inativo</option>
                    </select>
                    <br/> <br/>
                        <input type="submit" value="Cadastrar Produto" class="btn btn-primary" />
                    </form>
                </div>    
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
        
    </body>
</html>