<?php
    $tipo =  $_SESSION["tipo"];
    if($tipo === "admin"){
        echo "<ul class='nav nav-pills'>";
            echo "<li role='presentation' style='margin-botton:20px;'><a href='prova.php'>HOME</a></li>";
            echo "<li role='presentation'><a href='usuario.php'>USUÁRIO</a></li>";
            echo "<li role='presentation'><a href='cliente.php'>CLIENTES</a></li>";
            echo "<li role='presentation'><a href='vendedor.php'>VENDEDORES</a></li>";
            echo "<li role='presentation'><a href='produtos.php'>PRODUTOS</a></li>";
        echo "</ul>";
    }
    else {
        echo "<ul class='nav nav-pills'>";
            echo "<li role='presentation'><a href='prova.php'>HOME</a></li>";
            echo "<li role='presentation'><a href='cliente.php'>CLIENTES</a></li>";
        echo "</ul>";
    }
?>
