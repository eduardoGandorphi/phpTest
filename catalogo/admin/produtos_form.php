<?php $TituloPagina = "Produtos"; ?>
<?php
    include("inc/topo.php");
    //Recupera os Dados no Caso de Alteração
    require_once("dao/produto.dao.php");
    $codigo = "";
    $titulo = "";
    $destaque = array("checked","");
    $foto = "";
    $preco = "";
    $categoriacodigo = "";
    if (isset($_GET["codigo"])
        && $_GET["codigo"] != ""){
        $codigo = $_GET["codigo"];
        $produtoDAO = new ProdutoDAO();
        $produto = $produtoDAO->BuscarPorCodigo($codigo);
        $titulo = $produto["titulo"];
        $foto = $produto["foto"];
        $preco = $produto["preco"];
        $categoriacodigo = $produto["categoriacodigo"];
        $destaque = array($produto["destaque"]?"":"checked",
                          $produto["destaque"]?"checked":"");
    }
?>
<h1>Produtos</h1>

<!-- Montar o Form  -->
<form method="post" action="produtos_grava.php" enctype="multipart/form-data">
    <input type="hidden" name="codigo" id="codigo" 
           value="<?=$codigo?>" />
    <p>
    <label for="titulo" class="control-label">Título: </label>
    <input type="text" maxlenght="50" required name="titulo" id="titulo" class="form-control"  value="<?=$titulo?>"/>
    </p>
    <p>
    <label for="preco" class="control-label">Preço: </label>
    <input type="number" step="0.01" maxlenght="50" required name="preco" id="preco" class="form-control"  value="<?=$preco?>"/>
    </p>
        <p>
    <label for="foto" class="control-label">Foto: </label>
    <input type="hidden" name="foto" id="foto" value="<?=$foto?>"/>
    <input type="file" name="arquivo" id="arquivo" class="form-control" />
    <?php if ($foto != "" && $foto != null) {?>
    <img src="fotos/produtos/<?=$foto?>" />        
    <?php }?>
    </p>
        <p>
    <label class="control-label">Destaque? </label>
    <label><input type="radio" name="destaque" id="destaque0"  value="0" <?=$destaque[0];?>/> Não </label>
    <label><input type="radio" name="destaque" id="destaque1"  value="1" <?=$destaque[1];?>/> Sim </label>            
    </p>
    <p>
    <label for="categoriacodigo" class="control-label">Categoria: </label>
    <!--<input type="text" maxlenght="50" required name="categoriacodigo" id="categoriacodigo" class="form-control"  value="<?=$categoriacodigo?>"/>-->
    <select id="categoriacodigo" name="categoriacodigo" class="form-control">
        <option value="">[Selecione uma Categoria...]</option>
    <?php
    include_once("dao/categoria.dao.php");
    $categoriaDAO = new CategoriaDAO();
    $categorias = $categoriaDAO->ListarTudo();
    foreach($categorias as &$cat){
        echo '<option ' . ($cat["codigo"]==$categoriacodigo?"selected":"") 
        . ' value="'.$cat["codigo"].'">'.$cat["nome"].'</option>';
    }
    ?>
    </select>    
    </p>
    
    <button type="submit" class="btn btn-primary">Salvar</button>

</form>
<?php include("inc/rodape.php");?>
