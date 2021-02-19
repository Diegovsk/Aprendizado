<?php
session_start();

if ($_POST['campoEmail'] && $_POST['campoSenha'] && !empty($_POST['campoEmail']) && !empty($_POST['campoSenha'])) {

    require_once "../../models/UsuarioModel.php";
    $UsuarioModel = new UsuarioModel();
    $email = $_POST['campoEmail'];
    $senha = md5($_POST['campoSenha']);

    $rs = $UsuarioModel->login($email, $senha);

    if (mysqli_num_rows($rs) == 1) {
        $usuario = $rs->fetch_object();
        //Record data in the session
        require_once "../../helpers/Seguranca.php";

        Seguranca::login($usuario->id, $usuario->nome, $usuario->email);



    } else {
        header("Location: ../../views/Usuarios/login.php?erro=1");
        exit;
    }
} else {
    header("Location: ../../views/Usuarios/login.php?erro=2");
    exit;
}
