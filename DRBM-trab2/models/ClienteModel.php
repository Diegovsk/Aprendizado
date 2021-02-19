<?php

require_once "Conexao.php";

class ClienteModel{
    private $db;
    public $tabela = "clientes";

    function __construct()
    {
        $this->db = new Conexao();
    }


    public function listar(){
        //Create SQL string
        $sql = "Select * from $this->tabela";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
    public function add($nome, $cpf, $email){
        //Create SQL string
        $sql = "Insert into $this->tabela (nome, cpf, email) values ('$nome', '$cpf', '$email')";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
    
    public function listarPorId($id){
        //Create SQL string
        $sql = "Select * from $this->tabela where id = $id";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
    public function edit($id,$nome,$cpf, $email){
        //Create SQL string
        $sql = "Update $this->tabela set nome='$nome', cpf='$cpf', email='$email' where id = $id";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
    public function del($id){
        //Create SQL string
        $sql = "Delete from $this->tabela where id = $id";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
}
