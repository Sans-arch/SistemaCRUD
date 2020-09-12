<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Atualizar</title>
</head>
<body>
    <div class="container">
    <h1>Atualizar</h1>    
    <h4>Para atualizar o usuário específico é necessário inserir o ID dele, para verificar o ID, basta você consultar ele através do botão CONSULTAR</h4>
    <form action="actions/update.php" method="POST">
        <input type="text" name="nome" placeholder="Digite o seu nome..."><br><br>
        <input type="email" name="email" placeholder="Digite o seu email..."><br><br>
        <input type="password" name="senha" placeholder="Digite a seu senha..."><br><br>
        <input type="number" name="id" placeholder="Digite o id desejado..."><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <br><br><br>
    <a href="consulta.php"><button class="btn btn-info">Consultar</button></a>

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>