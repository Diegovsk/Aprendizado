<?php
require "../../models/NotebooksModel.php";

$NotebooksModel = new NotebooksModel();


if($_POST){  
    $nome = $_POST['campoNome'];
    $processador = $_POST['campoProcessador'];
    $memram = $_POST['campoMemram'];
    $polegadas = $_POST['campoPolegadas'];
    $placavideo = $_POST['campoPlacavideo'];
    $preco = $_POST['campoPreco'];
    $NotebooksModel -> add($nome, $processador, $memram, $polegadas, $placavideo, $preco);
} else{
    echo "Erro, preencha o campo corretamente.";
}


header("Location: ../../views/Categorias");