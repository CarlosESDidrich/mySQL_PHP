nome: Crud.class.php
<?php
 abstract class Crud{
 protected $tabela;
 public abstract function inserir();
 public abstract function atualizar($campo, $id);


 public function listar(){
    $selectSql = "SELECT * from {$this -> tabela}";
    return conexao::query($selectSql);}
 }