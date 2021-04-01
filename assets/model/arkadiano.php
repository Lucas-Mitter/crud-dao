<?php

class Arkadiano{
 
private $id;
private $nome;
private $sobrenome;
private $email;
private $cep;

public function getId(){
    return $this->id;
}

public function setId($i){
    $this->id = $i;
}

public function getNome(){
    return $this->nome;
}

public function setNome($nome){
    $this->nome = $nome;
}

public function getSobrenome(){
    return $this->sobrenome;
}

public function setSobrenome($sobrenome){
    $this->sobrenome = $sobrenome;
}

public function getEmail(){
    return $this->email;
}

public function setEmail($email){
    $this->email = $email;
}

public function getCep(){
    return $this->cep;
}

public function setCep($cep){
    $this->cep = $cep;
}

}
?>