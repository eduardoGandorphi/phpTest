<?php
    session_start();
    //Verifico se o Usuário já foi informado previamente
    // = LOGADO
    //if (!isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"] == "" || $_SESSION["usuario"]==null){
        //Caso o Usuário não esteja logado, jogo ele para a
        //tela de Login
        header("Location: index.php");
    }
?>
<!doctype html>
<html>
    <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

        
        
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
        
        
        
        
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
        <title>Terra Produtiva - <?=$TituloPagina?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Terra Produtiva</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clientes.php">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produtos.php">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categorias.php">Categorias</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="usuarios.php">Usuários</a>
          </li>             
        </ul>
        <div class="navbar-text">
            <?=$_SESSION["usuario.nome"]?> <a href="logout.php">sair</a>
        </div>
      </div>
    </nav>
    <main role="main" class="container">