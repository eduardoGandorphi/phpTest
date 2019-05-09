<?php  // admin/categoria_grava.php

    require_once("dao/categoria.dao.php");

    if (isset($_GET["excluir"]) 
               && $_GET["excluir"] != "0"){
        
        $codigo = $_GET["excluir"];
        $categoriaDAO = new CategoriaDAO();
        $categoriaDAO->Excluir($codigo);
        
        if ($sucesso){
            header("Location: categorias.php");
        } else {
            header("Location: categorias.php?erro=" . $categoriaDAO->Mensagem);
        }   
    } else if (!isset($_POST["codigo"]) 
        || $_POST["codigo"] == "" 
        || $_POST["codigo"] == "0"){
        //Inclusão
        
        $categoria = array($_POST["nome"]);
        $categoriaDAO = new CategoriaDAO();
        
        $sucesso = $categoriaDAO->Inserir($categoria);
        
        if ($sucesso){
            header("Location: categorias.php");
        } else {
            header("Location: categorias_form.php?erro=" . $categoriaDAO->Mensagem);
        }   
    } else if (isset($_POST["codigo"])
              && $_POST["codigo"] != "0") {
        //Alteração
        $categoria = array($_POST["nome"],$_POST["codigo"]);
        $categoriaDAO = new CategoriaDAO();
        
        $sucesso = $categoriaDAO->Alterar($categoria);
        
        if ($sucesso){
            header("Location: categorias.php");
        } else {
            header("Location: categorias_form.php?erro=" . $categoriaDAO->Mensagem);
        }   
    } 

?>