<?php
require_once(__DIR__ . "/../inc/conexao.php");

class GenericDAO extends Conexao {
    
    public $Mensagem = "";
    
    protected $sqlInsert = "";
    protected $sqlUpdate = "";
    protected $sqlDelete = "";
    protected $sqlSelectAll = "";
    protected $sqlSelectOne = "";
    
    public function __construct(){
        parent::__construct();
    }
    
    public function ListarTudo() {
        
        $resultado = $this->query($this->sqlSelectAll);
        $resultado->setFetchMode(PDO::FETCH_ASSOC);
        $lista = $resultado->fetchAll();
        
        return $lista;
    }
    
    public function BuscarPorCodigo($codigo){
        
        $comando = $this->prepare($this->sqlSelectOne);
        $valores = array($codigo);
        try {
            
            $comando->execute($valores);
            $comando->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $comando->fetchAll();
            
        } catch (Exception $e){
            $this->Mensagem = $e->getMessage();
        }
        $registro = null;        
        if (count($resultado) == 1){
            $registro = $resultado[0];   
        }
        return $registro;
    }
    
    public function Inserir($valores) {
        $comando = $this->prepare($this->sqlInsert);
        try{
            $comando->execute($valores);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
//Vou sempre receber o Código como último valor do Array
    public function Alterar($dados){
        $comando = $this->prepare($this->sqlUpdate);
        //-->> O Campo código é o último a ser substituído
        // na preparação do Comando SQL, por este motivo
        // deve ser o último item no Array de valores
        try{
            $comando->execute($dados);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
    //Exclusão de Categoria
    function Excluir($codigo){
        $comando = $this->prepare($this->sqlDelete);
        $filtro = array($codigo);
        try{
            $comando->execute($filtro);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }    
    
}

?>