<?php
    include("conecta.php");
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $status = $_POST['status'];
    $renda = $_POST['renda'];
    $credito = $_POST['credito'];
    $pessoa = "INSERT INTO pessoas(nome,cpf,status) VALUES ('$nome','$cpf','$status')";
    if(mysqli_query($conn, $pessoa)){
    $pessoa2 = "select idpessoa from pessoas where nome='$nome' and cpf='$cpf'";
    $pessoa3 = mysqli_fetch_array($pessoa2);
        $sql = "INSERT INTO clientes(fk_idpessoas,renda,credito) VALUES ('$pessoa3','$renda','$credito')";
        if(mysqli_query($conn, $sql)){
            echo "<script language='javascript' type='text/javascript'>
            alert('cliente cadastrado com sucesso!');
            window.location.href = 'cliente.php';
            </script>";
        }
        else{
            echo "<script language='javascript' type='text/javascript'>
            alert('cliente não foi cadastrado!');
            window.location.href = 'cliente.php';
            </script>";
        }
    }
    mysqli_close($conn);
?>