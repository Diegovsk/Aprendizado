<?php
include "../../helpers/config.php";
if(!isset($_GET['id'])){
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];

require "../../models/ClienteModel.php";

$ClienteModel = new ClienteModel();

$rs = $ClienteModel ->listarPorId($id);

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
            <div class="col-md-9">
                <h3> Edição de Clientes</h3>
                <p> Você pode editar as informações abaixo.</p>
                <form method="post" action="../../controllers/Clientes/edit.php">
                    <input type="hidden" name = "campoId" value="<?php echo $obj->id ?>">
                    <div class="form-group">
                        <label for="idNome">Nome:</label>
                        <input id="idNome" class="form-control" type="text" name="campoNome" required value="<?php echo $obj->nome ?>">
                    </div>
                    <div class="form-group">
                        <label for="idCpf">CPF:</label>
                        <input id="idCpf" class="form-control" type="text" name="campoCpf" required value="<?php echo $obj->cpf ?>" maxlength="11" minlength="11" placeholder="Somente números.">
                    </div>
                    <div class="form-group">
                        <label for="idEmail">Email:</label>
                        <input id="idEmail" class="form-control" type="text" name="campoEmail" required value="<?php echo $obj->email ?>">
                    </div>
                    <button class="btn btn-success" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>