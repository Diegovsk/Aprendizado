<?php
include "../../helpers/config.php";
require_once "../../models/UsuarioModel.php";

$UsuarioModel = new UsuarioModel();

$rs = $UsuarioModel -> listar();
$obj = $rs->fetch_object();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <?php include "../includes/head.php";?>
</head>

<body>
    <div class="container">
        <div class="row geral">
            <div class="col-md-3">
                <?php include "../includes/menu-lateral.php"; ?>
            </div>
            <div class="col-md-8">
                <h3> Sistema de gestão de dados </h3>
                <h3> <?php echo $obj->nome?>, seja bem-vindo!</h3>
                <img src="../includes/bemvindo.png" alt="Bem-vindo!">
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
    <script>
	function excluir(id){
		if(confirm("Você tem certeza que deseja excluir isto?")){
			window.location.href = "../../controllers/Categorias/del.php?id=" +id;
		}
	}
</script>
</body>
</html>