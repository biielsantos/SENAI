<?php
    include("conecta.php");
    $descricao = $_POST['descricao'];
    $estoque = $_POST['estoque'];
    $valor = $_POST['valor'];
    $status = $_POST['status'];
    $produto = mysqli_query($conn, "SELECT * FROM produtos");
    $sql = "INSERT INTO produtos(descricao,estoque,valor,status) VALUES ('$descricao','$estoque','$valor','$status')";
    if(mysqli_query($conn, $sql)){
        echo "<script language='javascript' type='text/javascript'>
        alert('produto cadastrado com sucesso!');
        window.location.href = 'produtos.php';
        </script>";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>
        alert('produto não foi cadastrado!');
        window.location.href = 'produtos.php';
        </script>";
    }
    echo $status;
    mysqli_close($conn);
?>