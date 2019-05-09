<?php  // admin/produto_grava.php

    require_once("dao/produto.dao.php");

    if (isset($_GET["excluir"]) 
               && $_GET["excluir"] != "0"){
        
        $codigo = $_GET["excluir"];
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->Excluir($codigo);
        
        if ($sucesso){
            header("Location: produtos.php");
        } else {
            header("Location: produtos.php?erro=" . $produtoDAO->Mensagem);
        }   
    } else if (!isset($_POST["codigo"]) 
        || $_POST["codigo"] == "" 
        || $_POST["codigo"] == "0"){
        //Inclusão
        
        $foto = GravaArquivo();//Chamo a Função de Gravação de Arquivo de Upload
        
        $produto = array($_POST["titulo"],$_POST["preco"],$_POST["destaque"],$_POST["categoriacodigo"],$foto);
        $produtoDAO = new ProdutoDAO();
        
        $sucesso = $produtoDAO->Inserir($produto);
        
        if ($sucesso){
            header("Location: produtos.php");
        } else {
            header("Location: produtos_form.php?erro=" . $produtoDAO->Mensagem);
        }   
    } else if (isset($_POST["codigo"])
              && $_POST["codigo"] != "0") {
        //Alteração
        
        $foto = GravaArquivo();
        $foto = $foto == null ? $_POST["foto"] : $foto;
        
        $produto = array($_POST["titulo"],$_POST["preco"],$_POST["destaque"],$_POST["categoriacodigo"],$foto,$_POST["codigo"]);
        
        $produtoDAO = new ProdutoDAO();
        
        $sucesso = $produtoDAO->Alterar($produto);
        
        if ($sucesso){
            header("Location: produtos.php");
        } else {
            header("Location: produtos_form.php?erro=" . $produtoDAO->Mensagem);
        }   
    } 


    //Função de Gerenciamento de Upload
    //Será usada em Inclusão e Alteração
    function GravaArquivo(){
        if($_FILES["arquivo"]["name"]!=""){
        
            $caminho = ".\\fotos\\produtos\\";
            
            $extensao = pathinfo(
                    $_FILES["arquivo"]["name"],
                    PATHINFO_EXTENSION);
            
            $arquivo = md5(uniqid()) . "." . $extensao;
            
            $destino = $caminho . $arquivo;
            
            if (move_uploaded_file(
                $_FILES['arquivo']['tmp_name'], $destino)) {
            
                return $arquivo;
            }
            
        }
        
        return null; //Não fiz upload, devolve nulo
        
    }


?>








