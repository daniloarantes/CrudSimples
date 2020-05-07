<?php
    require_once('funcoes.php');

    index();
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
    <title>Exibir Contatos</title>

    <style>
        table, th, td {
            border: 1px solid black;
        }

        #white-background{
            display: none;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #fefefe;
            opacity: 0.7;
            z-index: 9999;
        }

        #dlgbox{
            /*initially dialog box is hidden*/
            display: none;
            position: fixed;
            width: 480px;
            z-index: 9999;
            border-radius: 10px;
            background-color: #7c7d7e;
        }

        #dlg-header{
            background-color: black;
            color: white;
            font-size: 20px;
            padding: 10px;
            margin: 5px 5px 0 5px;
        }

        #dlg-body{
            background-color: white;
            color: black;
            font-size: 14px;
            padding: 10px;
            margin: 0 5px 0 5px;
        }

        #dlg-footer{
            background-color: #f2f2f2;
            text-align: right;
            padding: 10px;
            margin: 0 5px 5px 5px;
        }

        #dlg-footer button{
            background-color: #80c183;
            color: white;
            padding: 5px;
            border: 0;
        }
    </style>
</head>
<body>
<h1></h1>
    <h2>Contatos Cadastrados</h2>




    <table>
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>E-mail</td>
            <td>Opções</td>
        </tr>
        <?php if ($contatos) : ?>
        <?php foreach ($contatos as $contato) : ?>
        <tr>
            <td><?php echo $contato['codigo']; ?></td>
            <td><?php echo $contato['nome']; ?></td>
            <td><?php echo $contato['telefone']; ?></td>
            <td><?php echo $contato['email']; ?></td>

            <td>
                <a href="alterar.php?codigo=<?php echo $contato['codigo']; ?>">Atualizar</a>
                <a href="deletar.php?codigo=<?php echo $contato['codigo']; ?>">Remover</a>
                <a class="del" href="#" value="<?php echo $contato['codigo']; ?>">Remover</a>

            </td>
        </tr>
        <?php endforeach; ?>
        <?php else : ?>
        <tr>
            <td>Nenhum registro encontrado</td>
        </tr>
        <?php endif; ?>

    </table>

<!-- dialog box -->
<div id="white-background">
</div>
<div id="dlgbox">
    <div id="dlg-header">Apagar Registro</div>
    <div id="dlg-body">Deseja excluir o contato ID <span id="cod"></span>?</div>
    <div id="dlg-footer">
        <button id="deleta">Remover</button>
        <button id="cancelar">Cancel</button>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {

        var codigo;

        $(".del").click(function () {
            codigo = $(this).attr("value");
            $("#deleta").attr("href", "deletar.php?codigo=" + codigo);
            $("#cod").text(codigo);
            showDialog();
        })

        $("#deleta").click(function () {
            window.location='deletar.php?codigo=' + codigo;
            dlgHide()
        })

        $("#cancelar").click(function () {
            dlgHide();
            document.getElementsByTagName("H1")[0].innerHTML = "You clicked Cancel.";
        })


    });



    function dlgHide(){
        var whitebg = document.getElementById("white-background");
        var dlg = document.getElementById("dlgbox");
        whitebg.style.display = "none";
        dlg.style.display = "none";
    }

    function showDialog() {
        var whitebg = document.getElementById("white-background");
        var dlg = document.getElementById("dlgbox");
        whitebg.style.display = "block";
        dlg.style.display = "block";

        var winWidth = window.innerWidth;

        dlg.style.left = (winWidth / 2) - 480 / 2 + "px";
        dlg.style.top = "150px";
    }


</script>

</body>
</html>