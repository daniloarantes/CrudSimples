<?php
    require_once 'inc/config.php';
    require_once DBAPI;

session_start();

if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Básico</title>



</head>
<body>

<?php
    $db = abre_banco();

    if ($db){
        echo '<h1>Banco de Dados Conectado!</h1>';
    } else {
        echo '<h1>Não foi possível conectar, verifique!</h1>';
    }
?>

<a href="cadastro.php">Cadastrar</a>
<a href="listar.php">Listar</a>



<button id="show">Show Dialog</button>



</body>
</html>