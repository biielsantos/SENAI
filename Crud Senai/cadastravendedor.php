<?php
    include("conecta.php");
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $status = $_POST['status'];
    $salario = $_POST['salario'];
    if(mysqli_query($conn, "INSERT INTO pessoas(nome,cpf,status) VALUES ('$nome','$cpf','$status')"){
        $sql = "INSERT INTO vendedores(fk_idpessoas,salario) VALUES ((select idpessoa from pessoas where nome='$nome' and cpf='$cpf'),'$salario')";
        if(mysqli_query($conn, $sql)){
            echo "<script language='javascript' type='text/javascript'>
            alert('vendedor cadastrado com sucesso!');
            window.location.href = 'cliente.php';
            </script>";
        }
        else{
            echo "<script language='javascript' type='text/javascript'>
            alert('vendedor não foi cadastrado!');
            window.location.href = 'cliente.php';
            </script>";
        }
    }
    
    $cliente = mysqli_query($conn, "SELECT * FROM vendedores inner join pessoas on pessoas.idpessoa = vendedores.fk_idpessoas");
    
    mysqli_close($conn);
?>