<?php $TituloPagina = "Categorias"; ?>
<?php include("inc/topo.php");?>

<h1>Categorias <span class="float-right"><a class="btn btn-sm btn-success" href="categorias_form.php">Adicionar</a></span></h1>

<?php
    require_once("dao/categoria.dao.php");
    $categoriaDAO = new CategoriaDAO();
    
    $categoriasList = $categoriaDAO->ListarTudo();
?>

<table  id="gridPesquisa" class="table table-striped table-sm">
    <thead>
        <tr>
            <th style="width: 70px">Código</th>
            <th>Nome</th>
            <th style="width: 180px; max-width: 180px;">Ação</th>
        </tr>
    </thead>
    <tbody>
<?php        
    foreach($categoriasList as &$categoria){
        echo "<tr>";
        echo " <td>" . $categoria["codigo"] . "</td>";
        echo " <td>" . $categoria["nome"] . "</td>";
        echo " <td> <a class=\"btn btn-sm btn-primary\" href=\"#\">Alterar</a> <a class=\"btn btn-sm btn-danger\" href=\"#\">Excluir</a> </td>";
        echo "</tr>";
    }
?>        
    </tbody>
</table>

<?php include("inc/rodape.php");?>