<?php $TituloPagina = "Clientes"; ?>
<?php include("inc/topo.php");?>


<h1>Clientes <span class="float-right"><a class="btn btn-sm btn-success" href="clientes_form.php">Adicionar</a></span></h1>

<?php
    //Dados Fictícios
    $clientesList = array(
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com"),
        array("codigo"=>1, "nome"=>"Antônio", "cpf"=>"123.456.789-00", "telefone" =>"17-3265-8899", "email" =>"antonio@email.com"), 
        array("codigo"=> 2, "nome"=>"Joaquim", "cpf"=>"978.789.654-55", "telefone" => "17-99588-8877", "email" => "joaquim@email.com"),
        array("codigo"=> 3, "nome"=>"Maria", "cpf"=>"251.487.968-98", "telefone" => "17-4005-8755", "email" => "maria@email.com"),
        array("codigo"=> 4, "nome"=>"Julia", "cpf"=>"245.654.778-93", "telefone" => "17-3325-5665", "email" => "julia@ong.org"), 
        array("codigo"=> 5, "nome"=>"Alberto", "cpf"=>"301.857.965-41", "telefone" => "17-4125-5227", "email" =>"alberto@linked.in" ),
        array("codigo"=> 6, "nome"=>"Estefânia", "cpf"=>"863.854.102-25", "telefone" => "17-2544-6231", "email" => "stef@graf.com")

    );

?>

<table id="gridPesquisa" class="table table-striped table-sm">
    <thead>
        <tr>
            <th style="width: 70px">Código</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th style="width: 180px; max-width: 180px;">Ação</th>
        </tr>
    </thead>
    <tbody>
<?php        
    foreach($clientesList as &$cliente){
        echo "<tr>";
        echo " <td>" . $cliente["codigo"] . "</td>";
        echo " <td>" . $cliente["nome"] . "</td>";
        echo " <td>" . $cliente["cpf"] . "</td>";
        echo " <td>" . $cliente["telefone"] . "</td>";
        echo " <td>" . $cliente["email"] . "</td>";
        echo " <td> <a class=\"btn btn-sm btn-primary\" href=\"#\">Alterar</a> <a class=\"btn btn-sm btn-danger\" href=\"#\">Excluir</a> </td>";
        echo "</tr>";
    }
?>        
    </tbody>
</table>

<?php include("inc/rodape.php");?>