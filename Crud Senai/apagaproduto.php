<?php
    session_start();
    if($_SESSION["tipo"] !="admin"){
        header('location:prova.php');
    }
    include("conecta.php");
    $id = $_GET['idproduto'];
    $sql = "DELETE FROM produtos WHERE idproduto='$id'";
    if(mysqli_query($conn, $sql)){
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Produto apagado com sucesso!');
        window.location.href = 'produtos.php';
        </script>";
    }
    else
    {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Produto não foi apagado');
        window.location.href = 'produtos.php';
        </script>";
    }
    mysqli_close($conn);
?>