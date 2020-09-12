<?php
    include "conexao.php";

    //pegar dados do formulário do formulario.php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // função mysqli_query para injetar os dados no banco de dados
    mysqli_query($link,"insert into tb_login(nome,email,senha)values('$nome','$email','$senha')");
    //ele foi para pagina insert.php e rapidamente ira para formulario.php através do header
    header('location:../index.php');


?>