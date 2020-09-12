<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>
<body>
    <h1>Cadastro</h1>    

    <form action="actions/insert.php" method="POST">
        <input type="text" name="nome" placeholder="digite o seu nome...">
        <input type="email" name="email" placeholder="digite o seu email...">
        <input type="password" name="senha" placeholder="digite a seu senha...">
        <input type="submit" value="Cadastrar">
    </form>

    <br><br>
    <a href="consulta.php"><button>Consultar</button></a>
    <a href="atualizar.php"><button>Atualizar</button></a>
    <a href="deletar.php"><button>Deletar</button></a>
    
</body>
</html>