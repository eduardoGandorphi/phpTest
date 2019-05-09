<?php $TituloPagina = "Categorias"; ?>
<?php
    include("inc/topo.php");
    //Recupera os Dados no Caso de Alteração
    require_once("dao/categoria.dao.php");
    $codigo = "";
    $nome = "";

    if (isset($_GET["codigo"])
        && $_GET["codigo"] != ""){
        $codigo = $_GET["codigo"];
        $categoriaDAO = new CategoriaDAO();
        $categoria = $categoriaDAO->BuscarPorCodigo($codigo);
        $nome = $categoria["nome"];
    }
?>
<h1>Categorias</h1>

<!-- Montar o Form  -->
<form method="post" action="categorias_grava.php">
    <input type="hidden" name="codigo" id="codigo" 
           value="<?=$codigo?>" />
    <p>
    <label for="nome" class="control-label">Nome: </label>
    <input type="text" maxlenght="50" required name="nome" id="nome" class="form-control"  value="<?=$nome?>"/>
    </p>

    <button type="submit" class="btn btn-primary">Salvar</button>

</form>


<?php include("inc/rodape.php"); ?>