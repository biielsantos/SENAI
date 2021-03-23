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

    echo $status = $_POST['status'];
    }
    mysqli_close($conn);
?>