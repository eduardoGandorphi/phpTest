<?php
require_once(__DIR__ . "/../inc/conexao.php");

class ProdutoDAO extends Conexao {
    public $Mensagem = "";
    function ListarTudo() {
        
        $resultado = $this->query("SELECT * FROM produto ORDER BY titulo");
        $resultado->setFetchMode(PDO::FETCH_ASSOC);
        $produtos = $resultado->fetchAll();
        
        return $produtos;
    }
    function ListarDestaques() {
        
        $resultado = $this->query("SELECT p.*, c.nome as categoria 
        FROM produto p inner join categoria c on (p.categoriacodigo = c.codigo)
        WHERE destaque = 1 ORDER BY titulo");
        $resultado->setFetchMode(PDO::FETCH_ASSOC);
        $produtos = $resultado->fetchAll();
        
        return $produtos;
    }    
    
    function ListarPorCategoria($categoria) {
        
        $comando = $this->prepare("SELECT p.*, c.nome as categoria 
        FROM produto p inner join categoria c on (p.categoriacodigo = c.codigo)
        WHERE destaque = 1 
        AND   categoriacodigo = ?
        ORDER BY titulo");
        
        try {
            $valores = array($categoria);
            $comando->execute($valores);
            $comando->setFetchMode(PDO::FETCH_ASSOC);
            
            $produtos = $comando->fetchAll();
            
        } catch (Exception $e){
            $this->Mensagem = $e->getMessage();
        }
        
        return $produtos;
    }   
    function Inserir($valores) {
        $comando = $this->prepare("INSERT INTO produto (titulo,preco,destaque,categoriacodigo,foto) VALUES (?,?,?,?,?)");
        try{
            $comando->execute($valores);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
    function BuscarPorCodigo($codigo){
        
        $comando = $this->prepare("SELECT * FROM produto 
                                   WHERE codigo = ?");
        $valores = array($codigo);
        try {
            
            $comando->execute($valores);
            $comando->setFetchMode(PDO::FETCH_ASSOC);
            $produtos = $comando->fetchAll();
            
        } catch (Exception $e){
            $this->Mensagem = $e->getMessage();
        }
        $produto = null;        
        if (count($produtos) == 1){
            $produto = $produtos[0];   
        }
        return $produto;
    }
    
    //Vou sempre receber o Código como último valor do Array
    function Alterar($produto){
        $comando = $this->prepare("UPDATE produto
                                   SET titulo = ?,
                                   preco = ?,
                                   destaque = ?,
                                   categoriacodigo = ?,
                                   foto = ?
                                   WHERE codigo = ? ");
        //-->> O Campo código é o último a ser substituído
        // na preparação do Comando SQL, por este motivo
        // deve ser o último item no Array de valores
        try{
            $comando->execute($produto);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
    //Exclusão de produto
    function Excluir($codigo){
        $comando = $this->prepare("DELETE FROM produto
                                   WHERE  codigo = ?");
        $produto = array($codigo);
        try{
            $comando->execute($produto);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
}
?>