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
                <h3> Cadastro de Notebooks</h3>
                <p> Por favor, adicione as informações abaixo.</p>
                <form method="post" action="../../controllers/Categorias/add.php">
                    <div class="form-group">
                        <label for="idNome">Modelo:</label>
                        <input id="idNome" class="form-control" type="text" name="campoNome" required>
                    </div>
                    <div class="form-group">
                        <label for="idProcessador">Processador:</label>
                        <input id="idProcessador" class="form-control" type="text" name="campoProcessador" required>
                    </div>
                    <div class="form-group">
                        <label for="idMemram">Memória Ram:</label>
                        <input id="idMemram" class="form-control" type="text" name="campoMemram" required>
                    </div>
                    <div class="form-group">
                        <label for="idPolegadas">Polegadas:</label>
                        <input id="idPolegadas" class="form-control" type="text" name="campoPolegadas" required>
                    </div>
                    <div class="form-group">
                        <label for="idPlacavideo">Placa de vídeo:</label>
                        <input id="idPlacavideo" class="form-control" type="text" name="campoPlacavideo" required>
                    </div>
                    <div class="form-group">
                        <label for="idPreco">Preço:</label>
                        <input id="idPreco" class="form-control" type="text" name="campoPreco" required>
                    </div>
                    <button class="btn btn-success" type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>
</html>