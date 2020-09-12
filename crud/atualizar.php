<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <h1>Atualizar</h1>    
    <h4>Para atualizar o usuário específico é necessário inserir o ID dele, para verificar o ID, basta você consultar ele através do botão CONSULTAR</h4>
    <form action="actions/update.php" method="POST">
        <input type="text" name="nome" placeholder="digite o seu nome...">
        <input type="email" name="email" placeholder="digite o seu email...">
        <input type="password" name="senha" placeholder="digite a seu senha...">
        <input type="number" name="id" placeholder="digite o id desejado...">
        <input type="submit" value="Cadastrar">
    </form>

    <br><br><br>
    <a href="consulta.php"><button>Consultar</button></a>


</body>
</html>