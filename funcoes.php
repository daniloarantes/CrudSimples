<?php
require_once("inc/config.php");
require_once(DBAPI);

$contato = null;
$contatos = null;

function adiciona(){
    if (!empty($_POST['contato'])){
        $contato = $_POST["contato"];
        cadastrar('contatos',$contato);
        header('location: listar.php');
    }
}

function index(){
    global $contatos;
    $contatos = listar_tudo('contatos');
}

function editar(){
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        if (isset($_POST['contato'])){
            $contato = $_POST['contato'];
            atualizar('contatos', $codigo, $contato);
            header('location: listar.php');
        } else {
            global $contato;
            $contato = listar('contatos', $codigo);
        }
    } else {
        header('location: listar.php');
    }
}

function deletar($codigo = null){
    global $contato;
    $contato = remover('contatos', $codigo);
    header('location: listar.php');
}