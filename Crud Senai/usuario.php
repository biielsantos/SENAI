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
        <div style="width: 35%; float:left; padding-left:5%;">
        <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Cadastro de Usuários</h3></div>
                <div class="panel-body">
                    <form name="usuario" id="cadusuario" action="cadusuario.php" method="post">
                    <label>Nome</label> 
                    <input type="text" name="nome" placeholder="Digite o seu nome" maxlength="30" autofocus required="required" class="form-control" />
                    <br/>
                    <label>Login</label> 
                    <input type="text" name="login" placeholder="Digite o seu login" maxlength="30"  required="required" class="form-control" />
                    <br/>
                    <label>Senha</label> 
                    <input type="password" name="senha" placeholder="Digite a sua senha" maxlength="30"  required="required" class="form-control" />
                    <br/>
                    <div class="input-field col s12">
                    <select class="browser-default" name="tipo">
                    <option value="" disabled selected>Tipo De Usuario</option>
                        <option value="admin">Admin</option>
                        <option value="vendedor">Vendedor</option>
                        <option value="cliente">Cliente</option>
                    </select>
                    <br/> <br/> <br/> <br/>
                    <input type="submit" value="Cadastrar" class="btn btn-primary" />
                    </div> 
                    </form>
                </div>    
        </div>
        </div>
        <div style="width: 45%; float:right; padding-right:5%;">
        <?php
            include("conecta.php");
            echo "<h4>Usuários Cadastrados</h4>";
            $sql = mysqli_query($conn, "SELECT * FROM usuario");
            echo "<table class='table table-hover'>";
            echo "<tr>";
                echo "<th>Nome</th>";
                echo "<th>Login</th>";
                echo "<th>Tipo</th>";
                echo "<th>Ações</th>";
            echo "</tr>";
            while($usuario = mysqli_fetch_array($sql)){
            echo "<tr>";
                $id = $usuario['id'];
                echo "<td>".$usuario['nome']."</td>";
                echo "<td>".$usuario['login']."</td>";
                echo "<td>".$usuario['tipo']."</td>";
                echo "<td><a href='editausuario.php?id=$id'><button type='submit' class='btn btn-success'>Editar</button></a>&nbsp;&nbsp;<a href='apagausuario.php?id=$id'><button type='submit' class='btn btn-danger'>Apagar</button></a></td>";
            echo "</tr>";
            }
            mysqli_close($conn);
        ?>
  </button>
        </div>
        </section>
        <br>
        
    </body>
</html>