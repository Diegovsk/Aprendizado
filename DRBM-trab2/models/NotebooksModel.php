<?php

require_once "Conexao.php";

class NotebooksModel{
    private $db;
    public $tabela = "categorias";

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
    public function add($nome, $processador, $memram, $polegadas, $placavideo, $preco){
        //Create SQL string
        $sql = "Insert into $this->tabela (nome, processador, memram, polegadas, placavideo, preco) values ('$nome', '$processador', '$memram', '$polegadas', '$placavideo', '$preco')";
        // Execute and return data 
        return $this->db->executeSQL($sql);
    }
    public function listarPorId($id){
        //Create SQL string
        $sql = "Select * from $this->tabela where id = $id";
        // Execute and return data
        return $this->db->executeSQL($sql);
    }
    public function edit($id, $nome, $processador, $memram, $polegadas, $placavideo, $preco){
        //Create SQL string
        $sql = "Update $this->tabela set nome='$nome', processador='$processador', memram='$memram', polegadas='$polegadas', placavideo='$placavideo', preco='$preco' where id = $id";
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
