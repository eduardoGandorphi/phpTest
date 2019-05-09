<?php $TituloPagina = "Usuários"; ?>
<?php include("inc/topo.php");?>

<h1>Usuários <span class="float-right"><a class="btn btn-sm btn-success" href="usuarios_form.php">Adicionar</a></span></h1>

<?php
    require_once("dao/usuario.dao.php");
    $usuarioDAO = new UsuarioDAO();
    
    $usuariosList = $usuarioDAO->ListarTudo();
?>

<table  id="gridPesquisa" class="table table-striped table-sm">
    <thead>
        <tr>
            <th style="width: 70px">Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th style="width: 180px; max-width: 180px;">Ação</th>
        </tr>
    </thead>
    <tbody>
<?php        
    foreach($usuariosList as &$usuario){
        echo "<tr>";
        echo " <td>" . $usuario["codigo"] . "</td>";
        echo " <td>" . $usuario["nome"] . "</td>";
        echo " <td>" . $usuario["email"] . "</td>";
        echo " <td> <a class=\"btn btn-sm btn-primary\" href=\"usuarios_form.php?codigo=".$usuario["codigo"].
            "\">Alterar</a> <a class=\"btn btn-sm btn-danger\" href=\"usuarios_grava.php?excluir=".$usuario["codigo"]."\">Excluir</a> </td>";
        echo "</tr>";
    }
?>        
    </tbody>
</table>

<?php include("inc/rodape.php");?>