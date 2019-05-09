<?php $TituloPagina = "Usuários"; ?>
<?php
    include("inc/topo.php");
    //Recupera os Dados no Caso de Alteração
    require_once("dao/usuario.dao.php");
    $codigo = "";
    $nome = "";
    $email = "";
    $senha = "";

    if (isset($_GET["codigo"])
        && $_GET["codigo"] != ""){
        $codigo = $_GET["codigo"];
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->BuscarPorCodigo($codigo);
        $nome = $usuario["nome"];
        $email = $usuario["email"];
        $senha = $usuario["senha"];
    }
?>
<h1>Usuários</h1>

<!-- Montar o Form  -->
<form method="post" action="usuarios_grava.php">
    <input type="hidden" name="codigo" id="codigo" 
           value="<?=$codigo?>" />
    <p>
    <label for="nome" class="control-label">Nome: </label>
    <input type="text" maxlenght="50" required name="nome" id="nome" class="form-control"  value="<?=$nome?>"/>
    </p>
    <p>
    <label for="email" class="control-label">Email: </label>
    <input type="email" maxlenght="50" required name="email" id="email" class="form-control"  value="<?=$email?>"/>
    </p>
        <p>
    <label for="senha" class="control-label">Senha: </label>
    <input type="password" maxlenght="50" required name="senha" id="senha" class="form-control"  value="<?=$senha?>"/>
    </p>
    <button type="submit" class="btn btn-primary">Salvar</button>

</form>


<?php include("inc/rodape.php"); ?>