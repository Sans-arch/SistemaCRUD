<?php
    include "conexao.php";
    $nome = 

    //pegar dados do formulário do formulario.php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = $_POST['id'];

    // função mysqli_query para injetar os dados no banco de dados
    mysqli_query($link,"UPDATE tb_login set nome = '$nome', senha = '$senha', email = '$email' WHERE id_login = '$id'"); 

    echo 'Atualizado';


?>