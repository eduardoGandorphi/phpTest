<?php $TituloPagina = "Produtos"; ?>
<?php include("inc/topo.php");?>

<h1>Produtos <span class="float-right"><a class="btn btn-sm btn-success" href="produtos_form.php">Adicionar</a></span></h1>

<?php
    require_once("dao/produto.dao.php");
    $produtoDAO = new ProdutoDAO();
    
    $produtosList = $produtoDAO->ListarTudo();

?>

<table id="gridPesquisa" class="table table-striped table-sm">
    <thead>
        <tr>
            <th style="width: 70px">Código</th>
            <th>Título</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Destaque?</th>
            <th style="width: 180px; max-width: 180px;">Ação</th>
        </tr>
    </thead>
    <tbody>
<?php        
    foreach($produtosList as &$produto){
        echo "<tr>";
        echo " <td>" . $produto["codigo"] . "</td>";
        echo " <td>" . $produto["titulo"] . "</td>";
        echo " <td>" . number_format($produto["preco"],2,",",".") . "</td>";
        echo " <td>" . $produto["categoriacodigo"] . "</td>";
        echo " <td>" . $produto["destaque"] . "</td>";
        echo " <td> <a class=\"btn btn-sm btn-primary\" href=\"produtos_form.php?codigo=".$produto["codigo"]."\">Alterar</a> <a class=\"btn btn-sm btn-danger\" href=\"produtos_grava.php?excluir=".$produto["codigo"]."\">Excluir</a> </td>";
        echo "</tr>";
    }
?>        
    </tbody>
</table>

<?php include("inc/rodape.php");?>