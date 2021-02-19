<?php
include "../../helpers/config.php";
require "../../models/UsuarioModel.php";

$UsuarioModel = new UsuarioModel();

$id = $_POST['campoId'];

if($_POST){ 
    $nome = $_POST['campoNome'];
    $email = $_POST['campoEmail'];
    $UsuarioModel -> edit($id, $nome, $email);
} else{
    echo "Erro, preencha o campo corretamente.";
}

header("Location: ../../views/Usuarios");