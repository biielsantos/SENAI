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
        <div style="width: 85%; padding-left:5%; padding-right:5%;">
        <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Pesquisar</h3></div>
                <div class="panel-body">
                    <form name="procura" id="procura" action="procura.php" method="post">
                    <label>Nome</label> 
                    <input type="text" name="procura" placeholder="Digite um nome ou uma letra" maxlength="30" autofocus required="required" class="form-control" />
                    <br/>
                    <input type="submit" value="Procurar" class="btn btn-primary" />
                    </form>
                </div>   
        </div>
        </div>
        <br/>
        <hr/>
        <br/>
        <center><a href="cadvendedor.php"><button class="btn btn-primary"><b>Cadastrar Vendedor</b></button></a></center>
        <br/>
        <div style="width: 85%; padding-left:5%; padding-right:5%;">
        <?php
            include("conecta.php");
            echo "<h4>Vendedores Cadastrados</h4>";
            $sql = mysqli_query($conn, "SELECT idvendedor,salario,nome,cpf,status FROM vendedores join pessoas on pessoas.idpessoa = vendedores.fk_idpessoa");
            echo "<table class='table table-hover'>";
            echo "<tr>";
                echo "<th>Nome</th>";
                echo "<th>Cpf</th>";
                echo "<th>Status</th>";
                echo "<th>Salário</th>";
                echo "<th>Ações</th>";
            echo "</tr>";
            while($vendedor = mysqli_fetch_array($sql)){
            echo "<tr>";
                $id = $vendedor['idvendedor'];
                echo "<td>".$vendedor['nome']."</td>";
                echo "<td>".$vendedor['cpf']."</td>";
                echo "<td>".$vendedor['status']."</td>";
                echo "<td>".$vendedor['salario']."</td>";
                echo "<td><a href='editarcliente.php?id=$id'><button type='submit' class='btn btn-success'>Editar</button></a>&nbsp;&nbsp;<a href='apagacliente.php?id=$id'><button type='submit' class='btn btn-danger'>Apagar</button></a></td>";
            echo "</tr>";
            }
            mysqli_close($conn);
        ?>
        </div>
        </section>
        
    </body>
</html>