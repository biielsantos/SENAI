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
        <div style="width: 75%; padding-left:5%; padding-right:10%;">
        <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Pesquisar</h3></div>
                <div class="panel-body">
                    <form name="procura" id="procura" action="procura.php" method="post">
                    <label>Procurar produto</label> 
                    <input type="text" name="procura" placeholder="Digite a data de solicitação" maxlength="30" autofocus required="required" class="form-control" />
                    <br/>
                    <input type="submit" value="Procurar" class="btn btn-primary" />
                    </form>
                </div>    
        </div>
        </div>
        <br/>
        <hr/>
        <div align="center">
        <br> <br> <br> <br>
        <?php
        echo "<table>";
        echo "<tr>";
        echo "<th>Descriçao</th>";
        echo "<th>Estoque</th>";
        echo "<th>Valor</th>";
        echo "<th>Status</th>";
        echo "</tr>";
        echo ("<h4>Carrinho</h4>");
        include("conecta.php");
        foreach($_SESSION['carrinho'] as $id){
            $sql = mysqli_query($conn, "SELECT * FROM produtos where idproduto=$id");
            while($produto = mysqli_fetch_array($sql)){
                echo "<tr>";
                $id = $produto['idproduto'];
                echo "<td>".$produto['descricao']."</td>";
                echo "<td>".$produto['estoque']."</td>";
                echo "<td>".$produto['valor']."</td>";
                echo "<td>".$produto['status']."</td>";
                echo "</tr>";
            }
        }
        echo "<td><a href='produtos.php?id=$id'><button type='submit' class='btn btn-success'>Finalizar Pedido</button></a>&nbsp;&nbsp";
        mysqli_close($conn);
        echo "</table>";
        ?>
        </div>
    </section>   
    </body>
</html>