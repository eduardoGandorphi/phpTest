<?php
    session_start();
    include_once("dao/usuario.dao.php");

    $mensagem = "Informe suas Credenciais!";
    if (isset($_POST["Email"]) && isset($_POST["Senha"])){
        $usuarioDAO = new UsuarioDAO();//Instancio a DAO
        //Busco o Usuário usando seu Email
        $usuario = $usuarioDAO->BuscarPorEmail($_POST["Email"]);
        if ($usuario!=null){
            if (md5($_POST["Senha"]) == $usuario["senha"]) {

                $_SESSION["usuario"] = $usuario["codigo"];
                $_SESSION["usuario.nome"] = $usuario["nome"];
                $_SESSION["usuario.email"] = $usuario["email"];

                header("Location: dashboard.php");
                exit();
            }
        }
        $mensagem = "Usuário ou Senha não conferem!";
    }
    header("Location: index.php?erro=" . $mensagem);
?>