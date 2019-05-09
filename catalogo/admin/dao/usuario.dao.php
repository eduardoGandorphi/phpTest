<?php
require_once(__DIR__ . "/../inc/conexao.php");

class UsuarioDAO extends Conexao {
    public $Mensagem = "";
    function ListarTudo() {
        
        $resultado = $this->query("SELECT * FROM usuario ORDER BY nome");
        $resultado->setFetchMode(PDO::FETCH_ASSOC);
        $usuarios = $resultado->fetchAll();
        
        return $usuarios;
    }
    
    function Inserir($valores) {
        $comando = $this->prepare("INSERT INTO usuario (nome,email,senha) VALUES (?,?,?)");
        try{
            $comando->execute($valores);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
    function BuscarPorCodigo($codigo){
        
        $comando = $this->prepare("SELECT * FROM usuario 
                                   WHERE codigo = ?");
        $valores = array($codigo);
        try {
            
            $comando->execute($valores);
            $comando->setFetchMode(PDO::FETCH_ASSOC);
            $usuarios = $comando->fetchAll();
            
        } catch (Exception $e){
            $this->Mensagem = $e->getMessage();
        }
        $usuario = null;        
        if (count($usuarios) == 1){
            $usuario = $usuarios[0];   
        }
        return $usuario;
    }
    //Método Buscar por Email
    function BuscarPorEmail($email){
        
        $comando = $this->prepare("SELECT * FROM usuario 
                                   WHERE email = ?");
        $valores = array($email);
        try {
            
            $comando->execute($valores);
            $comando->setFetchMode(PDO::FETCH_ASSOC);
            $usuarios = $comando->fetchAll();
            
        } catch (Exception $e){
            $this->Mensagem = $e->getMessage();
        }
        $usuario = null;        
        if (count($usuarios) == 1){
            $usuario = $usuarios[0];   
        }
        return $usuario;
    }
    //Vou sempre receber o Código como último valor do Array
    function Alterar($usuario){
        $comando = $this->prepare("UPDATE usuario
                                   SET nome = ?,
                                   email = ?,
                                   senha = ?
                                   WHERE codigo = ? ");
        //-->> O Campo código é o último a ser substituído
        // na preparação do Comando SQL, por este motivo
        // deve ser o último item no Array de valores
        try{
            $comando->execute($usuario);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
    //Exclusão de usuario
    function Excluir($codigo){
        $comando = $this->prepare("DELETE FROM usuario
                                   WHERE  codigo = ?");
        $usuario = array($codigo);
        try{
            $comando->execute($usuario);
            return true;
        } catch(Exception $e){
            $this->Mensagem = $e->getMessage();
            return false;
        }
    }
}
?>