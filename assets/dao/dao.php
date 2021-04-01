<?php

require 'config.php';
require 'assets/model/arkadiano.php';

class Dao{

    private $pdo;

    public function __construct(PDO $drive){
        $this->pdo = $drive;
    }

    public function exibirTodos(){

        $array = [];

        $sql = $this->pdo->query("SELECT * FROM crud");
        $data = $sql->fetchAll();

        foreach($data as $arkadiano){

            $ark = new Arkadiano();

            $ark->setId($arkadiano['id']);
            $ark->setNome($arkadiano['nome']);
            $ark->setsobrenome($arkadiano['sobrenome']);
            $ark->setEmail($arkadiano['email']);
            $ark->setCep($arkadiano['cep']);

            $array[] = $ark;
        }
        
        return $array;
    }

    public function adicionar(Arkadiano $ark){
        
        $sql = $this->pdo->prepare("INSERT INTO crud (nome, sobrenome, email, cep) VALUES (:nome, :sobrenome, :email, :cep)");

        $sql->bindValue(':nome', $ark->getNome());
        $sql->bindValue(':sobrenome', $ark->getSobrenome());
        $sql->bindValue(':email', $ark->getEmail());
        $sql->bindValue(':cep', $ark->getCep());
        $sql->execute();

    }

    public function exibirPorId($id){

        $sql = $this->pdo->prepare("SELECT * FROM crud WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        
        $arkadiano = $sql->fetch();

        $ark = new Arkadiano();

        $ark->setId($arkadiano['id']);
        $ark->setNome($arkadiano['nome']);
        $ark->setsobrenome($arkadiano['sobrenome']);
        $ark->setEmail($arkadiano['email']);
        $ark->setCep($arkadiano['cep']);

        return $ark;
        
    }

    public function atualizar(Arkadiano $ark){
        
        $sql = $this->pdo->prepare("UPDATE crud SET nome = :nome, sobrenome = :sobrenome, email = :email, cep = :cep where id = :id");

        $sql->bindValue(':id', $ark->getId());
        $sql->bindValue(':nome', $ark->getNome());
        $sql->bindValue(':sobrenome', $ark->getSobrenome());
        $sql->bindValue(':email', $ark->getEmail());
        $sql->bindValue(':cep', $ark->getCep());
        $sql->execute();

    }

    public function excluir($id){
        
        $sql = $this->pdo->prepare("DELETE FROM crud WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

}

?>