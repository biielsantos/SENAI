<?php
    session_start();
    if($_SESSION["tipo"] !="admin"){
        header('location:prova.php');
    }
    include("conecta.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM usuario WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Usuário apagado com sucesso!');
        window.location.href = 'usuario.php';
        </script>";
    }
    else
    {
        echo "<script language = 'javascript' type = 'text/javascript'>
        alert('Usuário não foi apagado com sucesso!');
        window.location.href = 'usuario.php';
        </script>";
    }
    mysqli_close($conn);
?>