<?php  // admin/usuario_grava.php

    require_once("dao/usuario.dao.php");

    if (isset($_GET["excluir"]) 
               && $_GET["excluir"] != "0"){
        
        $codigo = $_GET["excluir"];
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->Excluir($codigo);
        
        if ($sucesso){
            header("Location: usuarios.php");
        } else {
            header("Location: usuarios.php?erro=" . $usuarioDAO->Mensagem);
        }   
    } else if (!isset($_POST["codigo"]) 
        || $_POST["codigo"] == "" 
        || $_POST["codigo"] == "0"){
        //Inclusão
        
        $usuario = array($_POST["nome"],$_POST["email"],md5($_POST["senha"]));
        $usuarioDAO = new UsuarioDAO();
        
        $sucesso = $usuarioDAO->Inserir($usuario);
        
        if ($sucesso){
            header("Location: usuarios.php");
        } else {
            header("Location: usuarios_form.php?erro=" . $usuarioDAO->Mensagem);
        }   
    } else if (isset($_POST["codigo"])
              && $_POST["codigo"] != "0") {
        //Alteração
        
        $usuarioDAO = new UsuarioDAO();
        //Busca o Usuário salvo e verifica se a senha informada
        //é igual à gravada (já criptografada e inalterada)
        $usu = $usuarioDAO->BuscarPorCodigo($_POST["codigo"]);
        
        $senha = $_POST["senha"]==$usu["senha"] 
                    ? $_POST["senha"] 
                    : md5($_POST["senha"]);
        
        $usuario = array($_POST["nome"],$_POST["email"],$senha, $_POST["codigo"]);
        
        $sucesso = $usuarioDAO->Alterar($usuario);
        
        if ($sucesso){
            header("Location: usuarios.php");
        } else {
            header("Location: usuarios_form.php?erro=" . $usuarioDAO->Mensagem);
        }   
    } 

?>