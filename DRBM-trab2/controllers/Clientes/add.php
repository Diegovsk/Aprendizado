<?php
include "../../helpers/config.php";
require "../../models/ClienteModel.php";

$ClienteModel = new ClienteModel();


if($_POST){  
    $nome = $_POST['campoNome'];
    $cpf = $_POST['campoCpf'];
    $email = $_POST['campoEmail'];
    $ClienteModel -> add($nome, $cpf, $email);
} else{
    echo "Erro, preencha o campo corretamente.";
}


header("Location: ../../views/Clientes/");