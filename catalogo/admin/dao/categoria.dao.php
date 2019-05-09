<?php
require_once("inc/conexao.php");

class CategoriaDAO extends Conexao {
    
    function ListarTudo() {
        
        $resultado = $this->query("SELECT * FROM categoria ORDER BY nome");
        $resultado->setFetchMode(PDO::FETCH_ASSOC);
        $categorias = $resultado->fetchAll();
        
        return $categorias;
    }
    
    function Inserir($valores) {
        $comando = $this->prepare("INSERT INTO categoria (nome) VALUES (?)");
        try{
            $comando->execute($valores);
            return true;
        } catch(Exception $e){
            return false;
        }
    }
}
?>