<?php
include "../../helpers/config.php";
require "../../models/UsuarioModel.php";

$UsuarioModel = new UsuarioModel();


if($_POST){  
    $nome = $_POST['campoNome'];
    $senha = md5($_POST['campoSenha']);
    $email = $_POST['campoEmail'];
    $UsuarioModel -> add($nome, $email, $senha);
} else{
    echo "Erro, preencha o campo corretamente.";
}


header("Location: ../../views/Usuarios/");