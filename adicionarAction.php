<?php

$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$cep = filter_input(INPUT_POST, 'cep');


//echo 'Id: '.$id.' | Nome: '.$nome.' | sobrenome: '.$sobrenome.' | email: '.$email.' | cep: '.$cep;

if($nome && $sobrenome && $email && $cep){

    require 'config.php';
    require 'assets/dao/dao.php';

    $dao = new Dao($pdo);
    $ark = new Arkadiano();
    
    $ark->setNome($nome);
    $ark->setSobrenome($sobrenome);
    $ark->setEmail($email);
    $ark->setCep($cep);
    
    $dao->adicionar($ark);
    
    header('Location: index.php');
    exit;

} else{
    
}
?>