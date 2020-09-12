<?php
    include "conexao.php";
    $consulta = $_POST['consulta'];

    $sql = mysqli_query($link,"SELECT * from tb_login WHERE nome like '%$consulta%'");//like = contém
    //msqli_fetch_array lê linha por linha e coluna por coluna pegando os valores
    while($vetor = mysqli_fetch_array($sql)){
        $id = $vetor['id_login'];
        $nome = $vetor['nome'];
        $email = $vetor['email'];
        $senha = $vetor['senha'];

        echo "Id: $id<br>";
        echo "Nome: $nome<br>";
        echo "E-mail: $email<br>";
        echo "Senha: $senha<hr>";
    }

?>