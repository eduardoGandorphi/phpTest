<?php

require_once(__DIR__ . "/generic.dao.php");

class CategoriaDAO extends GenericDAO {
    
    function __construct(){
        parent::__construct();
        
        $this->sqlInsert = "INSERT INTO categoria (nome) VALUES (?)";
        
        $this->sqlSelectAll = "SELECT * FROM categoria ORDER BY nome";
        
        $this->sqlSelectOne = "SELECT * FROM categoria 
                                WHERE codigo = ?";
        $this->sqlUpdate = "UPDATE categoria
                                   SET nome = ?
                                   WHERE codigo = ? ";
        $this->sqlDelete = "DELETE FROM categoria
                                   WHERE  codigo = ?";
    }
    
}
?>