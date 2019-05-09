<?php include("inc/topo.php");?>
<?php
    if (!isset($_GET["produto"]) || $_GET["produto"] == ""){
        header("Location: index.php");
        exit();
    }
    include("admin/dao/produto.dao.php");
    include("admin/dao/categoria.dao.php");
    
    $produtoCodigo = $_GET["produto"];
    $produtoDAO = new ProdutoDAO();
    $categoriaDAO = new CategoriaDAO();
    //Busca o Produto com o Código do Produto recebido via GET
    $produto = $produtoDAO->BuscarPorCodigo($produtoCodigo);
    //Busca a Categoria a partir do Produto recuperado
    $categoria = $categoriaDAO->BuscarPorCodigo($produto["categoriacodigo"]);
    
    $foto = $produto["foto"]!=""
        ? "admin/fotos/produtos/" . $produto["foto"]  
        : "http://placehold.it/750x500";

?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?=$produto["titulo"];?>
        <small><a href="produtos.php?categoria=<?=$categoria["codigo"];?>"><?=$categoria["nome"];?></a></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Detalhes do Produto</li>
      </ol>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="<?=$foto?>" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Detalhes</h3>
          <p>Detalhamento do Produto, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
          <h3 class="my-3">Preço</h3>
          <ul>
            <li>R$ <?=number_format($produto["preco"],"2",",",".")?></li>
          </ul>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Produtos Relacionados</h3>

      <div class="row">
<?php
          $produtosRelacionados = 
              $produtoDAO->ListarPorCategoria($produto["categoriacodigo"]);
          echo $produtoDAO->Mensagem;
          foreach($produtosRelacionados as $prodRel) 
          {
            if ($prodRel["codigo"]==$produtoCodigo)
                continue;
              
            $fotoRel = $prodRel["foto"]!=""
                ? "admin/fotos/produtos/" . $prodRel["foto"]  
                : "http://placehold.it/500x300";
              
          ?>
        <div class="col-md-3 col-sm-6 mb-4">
          <a href="produto.php?produto=<?=$prodRel["codigo"]?>">
            <img class="img-fluid" src="<?=$fotoRel?>" alt="">
              <?=$prodRel["titulo"]?>
          </a>
        </div>
<?php 
          }?>
        

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include("inc/rodape.php");?>
