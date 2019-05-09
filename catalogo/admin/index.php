<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Terra Produtiva - Catálogo de Produtos</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="login.php">
      
      <h1>Terra Produtiva</h1>
        
      <h5 class="h5 mb-3 font-weight-normal">Informe seu Email e Senha para prosseguir</h5>
        
      <?php if (isset($_GET["erro"])) {?>
        <div class="alert alert-danger"><?=$_GET["erro"]?></div>
      <?php }?>
        
      <label for="Email" class="sr-only">Email</label>
      <input type="email" id="Email" name="Email" class="form-control" placeholder="Email de Usuário" required autofocus>
        
      <label for="Senha" class="sr-only">Senha</label>
      <input type="password" id="Senha" name="Senha" class="form-control" placeholder="Senha" required>
        
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar-me
        </label>
      </div>
        
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">Terra Produtiva &copy; 2018</p>
        
    </form>
  </body>
</html>
