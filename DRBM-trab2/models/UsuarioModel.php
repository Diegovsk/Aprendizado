<?php

require_once "Conexao.php";

class UsuarioModel{
    private $db;
    public $tabela = "usuarios";

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
    public function add($nome, $email, $senha){
        //Create SQL string
        $sql = "Insert into $this->tabela (nome, email, senha) values ('$nome', '$email', '$senha')";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
    
    public function listarPorId($id){
        //Create SQL string
        $sql = "Select * from $this->tabela where id = $id";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
    public function edit($id,$nome, $email){
        //Create SQL string
        $sql = "Update $this->tabela set nome='$nome', email='$email', where id = $id";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
    public function del($id){
        //Create SQL string
        $sql = "Delete from $this->tabela where id = $id";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
    public function login($email, $senha){
        //Create SQL string
        $sql = "Select * from $this->tabela where email = '$email' and senha = '$senha'";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
}
