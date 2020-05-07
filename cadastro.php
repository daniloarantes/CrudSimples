<?php
    require_once('funcoes.php');
    adiciona();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>

    <h1>Cadastro</h1>
    <p>Este formulário tem objetivo de cadastrar um aluno</p>

    <form action="cadastro.php" method="post">
        <input type="text" name="contato['nome']" placeholder="Nome"><br>
        <input type="tel" name="contato['telefone']" placeholder="Telefone"><br>
        <input type="email" name="contato['email']" placeholder="E-mail"><br>
        <button type="submit">Cadastrar</button>
    </form>





</body>
</html>