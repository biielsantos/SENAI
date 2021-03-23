<?php
    session_start();
    if($_SESSION["status"] !="OK"){
        header('location:index.php');
    }
    if($_SESSION["tipo"] !="admin"){
        header('location:prova.php');
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
        <?php
            include("conecta.php");
            $id = $_GET['id'];
            $sql2 = mysqli_query($conn, "SELECT idcliente,renda,credito,nome,cpf,status FROM clientes join pessoas on pessoas.idpessoa = clientes.fk_idpessoas WHERE idcliente='$id'") or die(mysqli_error($conn));
            while($cliente = mysqli_fetch_array($sql2)){
        ?>
        <div style="width: 35%; float:left; padding-left:5%;">
        <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Edição de Clientes</h3></div>
                <div class="panel-body">
                    <form name="usuario" id="cadusuario" action="editaclientebd.php?id=<?php echo $id; ?>" method="post">
                    <label>Nome</label> 
                    <input type="varchar" name="nome" value="<?php echo $cliente['nome']; ?>" maxlength="30" autofocus required="required" class="form-control" />
                    <br/>
                    <label>Cpf</label> 
                    <input type="bigint" name="login" value="<?php echo $cliente['cpf']; ?>" maxlength="30"  required="required" class="form-control" />
                    <br/>
                    <label>Crédito</label> 
                    <input type="decimal" name="credito" value="<?php echo $cliente['credito']; ?>" maxlength="30" autofocus required="required" class="form-control" />
                    <br/>
                    <label>Renda</label> 
                    <input type="decimal" name="renda" value="<?php echo $cliente['renda']; ?>" maxlength="30" autofocus required="required" class="form-control" />
                    <br/>
                    <div class="input-field col s12">
                    <select class="browser-default" name="status">
                    <option value="" disabled selected>Status</option>
                        <option value="a">Ativo</option>
                        <option value="i">Inativo</option>
                    </select>
                    <br/> <br/> <br/> <br/>
                    <input type="submit" value="Editar" class="btn btn-primary" />
                    </div> 
                    </form>
                    <?php
                        }
                        mysqli_close($conn);
                    ?>
                </div>    
        </div>
        </div>
        <div style="width: 45%; float:right; padding-right:5%;">
        <?php
            include("conecta.php");
            echo "<h4>Usuários Cadastrados</h4>";
            $sql = mysqli_query($conn, "SELECT idcliente,renda,credito,nome,cpf,status FROM clientes join pessoas on pessoas.idpessoa = clientes.fk_idpessoas WHERE idcliente='$id'");
            echo "<table class='table table-hover'>";
            echo "<tr>";
                echo "<th>Nome</th>";
                echo "<th>Cpf</th>";
                echo "<th>Crédito</th>";
                echo "<th>Renda</th>";
                echo "<th>Status</th>";
            echo "</tr>";
            while($cliente = mysqli_fetch_array($sql)){
            echo "<tr>";
                $id = $cliente['idcliente'];
                echo "<td>".$cliente['nome']."</td>";
                echo "<td>".$cliente['cpf']."</td>";
                echo "<td>".$cliente['credito']."</td>";
                echo "<td>".$cliente['renda']."</td>";
                echo "<td>".$cliente['status']."</td>";
                echo "<td><a href='editacliente.php?id=$id'><button type='submit' class='btn btn-success'>Editar</button></a>&nbsp;&nbsp;<a href='apagacliente.php?id=$id'><button type='submit' class='btn btn-danger'>Apagar</button></a></td>";
            echo "</tr>";
            }
            mysqli_close($conn);
        ?>
        </section>
    </body>
</html>