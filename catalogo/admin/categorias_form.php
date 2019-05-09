<?php $TituloPagina = "Categorias"; ?>
<?php include("inc/topo.php");?>
<h1>Categorias</h1>

<!-- Montar o Form  -->
<form method="post" accept-charset="categorias_grava.php">
    <input type="hidden" name="codigo" id="codigo" />
    <p>
    <label for="nome" class="control-label">Nome: </label>
    <input type="text" maxlenght="50" required name="nome" id="nome" class="form-control"/>
    </p>

    <button type="submit" class="btn btn-primary">Salvar</button>

</form>


<?php include("inc/rodape.php"); ?>