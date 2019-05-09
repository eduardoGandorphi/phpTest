<?php include ("inc/topo.php");?>
<?php 
    include("admin/dao/produto.dao.php");
    include("admin/dao/categoria.dao.php");

    //Se eu Receber a Categoria, listo os Produtos da Categoria, senão listo tudo
    $produtoDAO = new ProdutoDAO();

    if (isset($_GET["categoria"]) && $_GET["categoria"] != ""){
        
        $categoriaDAO =new CategoriaDAO();
        $categoria = $categoriaDAO->BuscarPorCodigo($_GET["categoria"]);
        $titulo = $categoria["nome"];
        
        $produtosLista = $produtoDAO->ListarPorCategoria($_GET["categoria"]);
        
    } else {
        $titulo = "Produtos";
        
        $produtosLista = $produtoDAO->ListarTudo();
    }

    
?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?=$titulo?>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Portfolio 3</li>
      </ol>

      <div class="row">
          <?php
          foreach($produtosLista as $produto)
          {
                  $foto = $produto["foto"]!=""
                    ? "admin/fotos/produtos/" . $produto["foto"]  
                    : "http://placehold.it/700x400";
          ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?=$foto?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="produto.php?produto=<?=$produto["codigo"]?>"><?=$produto["titulo"]?></a>
              </h4>
              <p class="card-text">
                Preço: R$ <?=number_format($produto["preco"],2,",",".")?>
                
                </p>
            </div>
          </div>
        </div>
          <?php 
          }
          ?>

      </div>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

<?php include("inc/rodape.php");?>