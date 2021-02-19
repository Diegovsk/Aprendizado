<?php
if(!isset($_GET['id'])){
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];

require "../../models/NotebooksModel.php";

$NotebooksModel = new NotebooksModel();

$rs = $NotebooksModel ->listarPorId($id);

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
                <h3> Edição de Notebooks</h3>
                <p> Você pode editar as informações abaixo.</p>
                <form method="post" action="../../controllers/Categorias/edit.php">
                    <input type="hidden" name = "campoId" value="<?php echo $obj->id ?>">
                    <div class="form-group">
                        <label for="idNome">Modelo:</label>
                        <input id="idNome" class="form-control" type="text" name="campoNome" required value="<?php echo $obj->nome ?>">
                    </div>
                    <div class="form-group">
                        <label for="idProcessador">Processador:</label>
                        <input id="idProcessador" class="form-control" type="text" name="campoProcessador" required value="<?php echo $obj->processador ?>">
                    </div>
                    <div class="form-group">
                        <label for="idMemram">Memória Ram:</label>
                        <input id="idMemram" class="form-control" type="text" name="campoMemram" required value="<?php echo $obj->memram ?>">
                    </div>
                    <div class="form-group">
                        <label for="idPolegadas">Polegadas:</label>
                        <input id="idPolegadas" class="form-control" type="text" name="campoPolegadas" required value="<?php echo $obj->polegadas ?>">
                    </div>
                    <div class="form-group">
                        <label for="idPlacavideo">Placa de vídeo:</label>
                        <input id="idPlacavideo" class="form-control" type="text" name="campoPlacavideo" required value="<?php echo $obj->placavideo ?>">
                    </div>
                    <div class="form-group">
                        <label for="idPreco">Preço:</label>
                        <input id="idPreco" class="form-control" type="text" name="campoPreco" required value="<?php echo $obj->preco ?>">
                    </div>
                    <button class="btn btn-success" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>