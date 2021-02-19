<?php include "../../helpers/config.php"; ?>

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
                <h3> Cadastro de Clientes</h3>
                <p> Por favor, adicione as informações abaixo.</p>
                <form method="post" action="../../controllers/Clientes/add.php">
                    <div class="form-group">
                        <label for="idNome">Nome:</label>
                        <input id="idNome" class="form-control" type="text" name="campoNome" required>
                    </div>
                    <div class="form-group">
                        <label for="idCpf">CPF:</label>
                        <input id="idCpf" class="form-control" type="text" name="campoCpf" required maxlength="11" minlength="11" placeholder="Somente números.">
                    </div>
                    <div class="form-group">
                        <label for="idEmail">E-mail:</label>
                        <input id="idEmail" class="form-control" type="email" name="campoEmail" required>
                    </div>
                    <button class="btn btn-success" type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>
</html>