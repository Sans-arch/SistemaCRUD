<?php
    include "conexao.php";

    
    $id = $_POST['id'];
    mysqli_query($link,"delete from tb_login WHERE id_login = '$id'");

    echo 'Usuário excluido com sucesso!';
?>